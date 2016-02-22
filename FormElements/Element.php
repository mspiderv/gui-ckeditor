<?php

namespace Vitlabs\GUICKEditor\FormElements;

use Vitlabs\GUICore\Traits\ElementTrait;
use Vitlabs\GUICore\Contracts\Elements\ElementContract;

abstract class Element implements ElementContract {

    use ElementTrait;

    public function getPackageName()
    {
        return 'gui-ckeditor';
    }

}
