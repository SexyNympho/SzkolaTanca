<?php

abstract class ViewModel implements IBindable, IValidatable {
    abstract public function GetBindableProperties();
}
