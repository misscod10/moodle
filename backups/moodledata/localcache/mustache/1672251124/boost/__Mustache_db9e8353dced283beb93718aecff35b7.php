<?php

class __Mustache_db9e8353dced283beb93718aecff35b7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="mod-indent-outer" id="mod-indent-outer-slot-';
        $value = $this->resolveValue($context->find('slotid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('checkbox'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('questionnumber'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    <div class="mod-indent"></div>
';
        $buffer .= $indent . '    <div class="activityinstance">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('questionname'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <span class="actions">
';
        $value = $context->find('versionselection');
        $buffer .= $this->section6cd31ae3db64dbe0fdfc8528594803e8($context, $indent, $value);
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('questionicons'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </span>
';
        $value = $context->find('canbeedited');
        $buffer .= $this->section4b71f6da3e03ad0cc213f7a1f782f894($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionC877874b20aed109ed5be9bdc0ef9c49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selected="selected"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'selected="selected"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section06dbc834d2b496a56070a017b145631d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <option value="{{version}}" {{#selected}}selected="selected"{{/selected}}>{{versionvalue}}</option>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <option value="';
                $value = $this->resolveValue($context->find('version'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('selected');
                $buffer .= $this->sectionC877874b20aed109ed5be9bdc0ef9c49($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('versionvalue'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6cd31ae3db64dbe0fdfc8528594803e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <label for="version-{{slotid}}"> </label>
            <select id="version-{{slotid}}" name="version" class="form-control mr-2 h-auto version-selection"
            data-action="mod_quiz-select_slot" data-slot-id="{{slotid}}">
                {{#versionoption}}
                    <option value="{{version}}" {{#selected}}selected="selected"{{/selected}}>{{versionvalue}}</option>
                {{/versionoption}}
            </select>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <label for="version-';
                $value = $this->resolveValue($context->find('slotid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"> </label>
';
                $buffer .= $indent . '            <select id="version-';
                $value = $this->resolveValue($context->find('slotid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" name="version" class="form-control mr-2 h-auto version-selection"
';
                $buffer .= $indent . '            data-action="mod_quiz-select_slot" data-slot-id="';
                $value = $this->resolveValue($context->find('slotid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('versionoption');
                $buffer .= $this->section06dbc834d2b496a56070a017b145631d($context, $indent, $value);
                $buffer .= $indent . '            </select>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4b71f6da3e03ad0cc213f7a1f782f894(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{{questiondependencyicon}}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('questiondependencyicon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
