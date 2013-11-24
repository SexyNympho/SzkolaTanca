<?php

class StylePricesController extends BaseController 
{
    public function __construct()
    {
        View::composer(array('prices/index', 'prices/edit'), function($v){
            $v->with('prices', DanceStylePrice::all());
        });
    }
    
    public function Index() 
    {        
        return View::make('prices/index');
    }
    
    public function Manage()
    {
        $styles = DanceStyle::all();
        $stylesWithoutPrice = $styles->filter(function($s){ return $s->prices == null; });

        $dropDown = array();
        foreach($stylesWithoutPrice as $withoutPrice)
        {
            $dropDown[$withoutPrice->id] = $withoutPrice->name;
        }
        
        return View::make('prices/edit', array('noPricesStyles' => $dropDown));
    }
    
    public function PostEdit($danceStyle)
    {
        $price = $danceStyle->prices;
        
        if (!$price->update(Input::all()))
        {
            'could not update prices';
        }
        
        return Redirect::route('managePrices');
    }
    
    public function PostCreate()
    {
        $binder = new Binder;
        $price = $binder->Bind("DanceStylePrice", Input::all());
        $price->save();
        
        $styleId = Input::get('danceStyleId');
        $style = DanceStyle::find($styleId);
        $style->prices()->save($price);
        
        return Redirect::route('managePrices');
    }
}
