<?php

namespace Vitlabs\GUICKEditor\FormElements;

use Vitlabs\GUICore\Traits\ElementTrait;

abstract class Element {

    use ElementTrait;

    public function getPackageName()
    {
        return 'gui-ckeditor';
    }

}
