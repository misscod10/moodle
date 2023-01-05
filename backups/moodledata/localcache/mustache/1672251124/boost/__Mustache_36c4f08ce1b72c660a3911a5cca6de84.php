<?php

class __Mustache_36c4f08ce1b72c660a3911a5cca6de84 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="mt-2 position-relative" data-region="random-question-preview-container">
';
        $buffer .= $indent . '    <div data-region="question-count-container"></div>
';
        $buffer .= $indent . '    <div data-region="question-list-container"></div>
';
        if ($partial = $this->mustache->loadPartial('core/overlay_loading')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
