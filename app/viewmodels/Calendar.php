<?php
class Calendar {
    
    public function __construct($year, $month)
    {
        $this->initialDate = new DateTime();
        $this->initialDate->setDate($year, $month, 1);
        $this->day = new DateInterval("P1D");
        $calendarStart = $this->MonthStart();
        for($i = 0; $i < $this->PreviousMonthDays(); ++$i)
        {
            $calendarStart = $calendarStart->sub($this->day);
        }
        
        $this->currentIteratorDate = $calendarStart;
        $this->currentIterator = 1;
    }
    
    public function MonthDayCount()
    {
        return $this->initialDate->format('t');
    }
    
    public function Next()
    {
        if ($this->currentIterator + 1 > $this->CalendarDaysCount())
        {
            return false;
        }
        
        ++$this->currentIterator;
        $this->currentIteratorDate->add($this->day);
        
        return true;
    }
    
    public function Previous()
    {
        if ($this->currentIterator == 1)
        {
            return false;
        }
        
        --$this->currentIterator;
        $this->currentIteratorDate->sub($this->day);
        
        return true;
    }
    
    private function PreviousMonthDays()
    {
        $monthStart = $this->MonthStart();
        $monthFirstWeekday = $monthStart->format('w');
        
        return $monthFirstWeekday - 1;
    }
    
    private function MonthStart()
    {
        $year = $this->initialDate->format('Y');
        $month = $this->initialDate->format('n');
        $monthStart = new DateTime();
        $monthStart->setDate($year, $month, 1);
        
        return $monthStart;
    }
    
    private function NextMonthDays()
    {
        $tillEndOfMonth = $this->PreviousMonthDays() + $this->MonthDayCount();
        
        $lastWeekDays = $tillEndOfMonth % 7;
        
        return 7 - $lastWeekDays;
    }
    
    private function CalendarDaysCount()
    {
        return $this->PreviousMonthDays() + $this->MonthDayCount() + $this->NextMonthDays();
    }
    
    public function Now()
    {
        return $this->currentIteratorDate;
    }
    
    public function IsCurrentMonth()
    {
        return $this->initialDate->format('n') === $this->currentIteratorDate->format('n');
    }
    
    public function NextMonthCalendarData()
    {
        $next = array();
        $curMonth = $this->initialDate->format('n');
        $curYear = $this->initialDate->format('Y');
        
        $next['year'] = ($curMonth == 12) ? $curYear + 1 : $curYear;
        $next['month'] = ($curMonth == 12) ? 1 : $curMonth + 1;
        
        return $next;
    }
    
    public function PreviousMonthCalendarData()
    {
        $previous = array();
        $curMonth = $this->initialDate->format('n');
        $curYear = $this->initialDate->format('Y');
        
        $previous['year'] = ($curMonth == 1) ? $curYear - 1 : $curYear;
        $previous['month'] = ($curMonth == 1) ? 12 : $curMonth - 1;
        
        return $previous;
    }
    
    private $initialDate;
    private $currentIteratorDate;
    private $currentIterator;
    private $day;
}
