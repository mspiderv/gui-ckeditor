<?php

namespace Vitlabs\GUICKEditor\Traits;

trait CKEditorTrait {

    public function ckeditor() { return $this->generate(__FUNCTION__, func_get_args()); }

}
