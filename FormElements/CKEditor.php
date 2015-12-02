<?php

namespace Vitlabs\GUICKEditor\FormElements;

use Vitlabs\GUICKEditor\Contracts\FormElements\CKEditorContract;
use Vitlabs\GUICore\Traits\AttributesTrait;
use Vitlabs\GUICore\Traits\DataTrait;
use Vitlabs\GUICore\Traits\FieldTrait;

class CKEditor extends Element implements CKEditorContract {

    use AttributesTrait, DataTrait, FieldTrait {
        FieldTrait::__construct insteadof AttributesTrait, DataTrait;
    }

    public function __construct()
    {
        $this->addClass('ckeditor');
        $this->setAttribute('type', 'text');
        $this->setAttribute('rows', '3');
    }

    public function needResources()
    {
        return [
            'js' => [
                '~ckeditor/ckeditor.js',
                '~ckeditor/adapters/jquery.js',
                '~js/ckeditor-init.js',
            ],
            'config' => [
                'gui-ckeditor.browseUrl' => 'ckeditorBrowseUrl',
                'gui-ckeditor.uploadUrl' => 'ckeditorUploadUrl',
            ],
        ];
    }

    // Render methods
    public function renderField()
    {
        $attributes = $this->getAttributes();

        $attributes['name'] = $this->get('name');

        return $this->getGenerator()->tag('textarea', $this->getEscapedValue(), true, $attributes)->render();
    }

}
