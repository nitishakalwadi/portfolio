<?php

/* plugins/simple_form/simple_form.html.twig */
class __TwigTemplate_a77c51b898c57cdf0abc1eb60874b2fcbb5e9a3df285143ca948c6d4a3c3fa8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((twig_length_filter($this->env, (isset($context["fields"]) ? $context["fields"] : null)) > 1)) {
            // line 2
            echo "  <form name=\"simple_form\" id=\"simple_form\" action=\"https://getsimpleform.com/messages?form_api_token=";
            echo (isset($context["token"]) ? $context["token"] : null);
            echo "\" enctype=\"multipart/form-data\" method=\"post\">

    <div class=\"col-md-6\">
      ";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["field"]) {
                // line 6
                echo "        <div id=\"simple_form-";
                echo $context["key"];
                echo "\">
          ";
                // line 7
                if (twig_in_filter($this->getAttribute($context["field"], "type", array()), array(0 => "text", 1 => "email", 2 => "tel", 3 => "hidden", 4 => "url", 5 => "date"))) {
                    // line 8
                    echo "           <div class=\"form-group\">
            <input type=\"";
                    // line 9
                    echo $this->getAttribute($context["field"], "type", array());
                    echo "\" id=\"simple_form-field-";
                    echo $context["key"];
                    echo "\" name=\"";
                    echo $context["key"];
                    echo "\" class=\"";
                    echo $this->getAttribute($context["field"], "class", array());
                    echo " form-control\" placeholder=\"";
                    echo $this->getAttribute($context["field"], "placeholder", array());
                    echo "\" value=\"";
                    echo $this->getAttribute($context["field"], "default", array());
                    echo "\" ";
                    if ($this->getAttribute($context["field"], "required", array())) {
                        echo "required=\"required\"";
                    }
                    echo " />
            <p class=\"help-block text-danger\"></p>
          </div>
        ";
                }
                // line 13
                echo "        ";
                if (twig_in_filter($this->getAttribute($context["field"], "type", array()), array(0 => "number", 1 => "range"))) {
                    // line 14
                    echo "          <div class=\"form-group\">
            <input type=\"";
                    // line 15
                    echo $this->getAttribute($context["field"], "type", array());
                    echo "\" id=\"simple_form-field-";
                    echo $context["key"];
                    echo "\" name=\"";
                    echo $context["key"];
                    echo "\" class=\"";
                    echo $this->getAttribute($context["field"], "class", array());
                    echo " form-control\" placeholder=\"";
                    echo $this->getAttribute($context["field"], "placeholder", array());
                    echo "\" value=\"";
                    echo $this->getAttribute($context["field"], "default", array());
                    echo "\" ";
                    if ($this->getAttribute($context["field"], "required", array())) {
                        echo "required=\"required\"";
                    }
                    echo " ";
                    if ((twig_length_filter($this->env, $this->getAttribute($context["field"], "min", array())) >= 0)) {
                        echo "min=\"";
                        echo $this->getAttribute($context["field"], "min", array());
                        echo "\"";
                    }
                    echo " ";
                    if ((twig_length_filter($this->env, $this->getAttribute($context["field"], "max", array())) >= 0)) {
                        echo "max=\"";
                        echo $this->getAttribute($context["field"], "max", array());
                        echo "\"";
                    }
                    echo " />
            <p class=\"help-block text-danger\"></p>
          </div>
        ";
                }
                // line 19
                echo "      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "  </div>

  <div class=\"col-md-6\">
    ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["field"]) {
                // line 25
                echo "      <div id=\"simple_form-";
                echo $context["key"];
                echo "\">
        ";
                // line 26
                if (($this->getAttribute($context["field"], "type", array()) == "textarea")) {
                    // line 27
                    echo "          <div class=\"form-group\">
            <textarea id=\"simple_form-field-";
                    // line 28
                    echo $context["key"];
                    echo "\" name=\"";
                    echo $context["key"];
                    echo "\" class=\"";
                    echo $this->getAttribute($context["field"], "class", array());
                    echo " form-control\" placeholder=\"";
                    echo $this->getAttribute($context["field"], "placeholder", array());
                    echo "\" ";
                    if ($this->getAttribute($context["field"], "required", array())) {
                        echo "required=\"required\"";
                    }
                    echo ">";
                    echo $this->getAttribute($context["field"], "default", array());
                    echo "</textarea>
            <p class=\"help-block text-danger\"></p>
          </div>
        ";
                }
                // line 32
                echo "      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "  </div>
  <div class=\"clearfix\"></div>
  <div class=\"col-lg-12 text-center\">
    <div id=\"simple_form-success\"></div>
    ";
            // line 38
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["field"]) {
                // line 39
                echo "      <div id=\"simple_form-";
                echo $context["key"];
                echo "\">
        ";
                // line 40
                if (($this->getAttribute($context["field"], "type", array()) == "submit")) {
                    // line 41
                    echo "          <div class=\"form-group\">
            <button id=\"simple_form-field-";
                    // line 42
                    echo $context["key"];
                    echo "\" name=\"";
                    echo $context["key"];
                    echo "\" class=\"";
                    echo $this->getAttribute($context["field"], "class", array());
                    echo " btn btn-primary btn-lg\">";
                    echo $this->getAttribute($context["field"], "title", array());
                    echo "</button>
          </div>
        ";
                }
                // line 45
                echo "      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "  </div>
</form>

<script>
      \$(function() {
        \$('#simple_form').submit(function() {
          \$.ajax({
            dataType: 'jsonp',
            url: \"http://getsimpleform.com/messages/ajax?form_api_token=";
            // line 55
            echo (isset($context["token"]) ? $context["token"] : null);
            echo "\",
            data: {
              ";
            // line 57
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["field"]) {
                // line 58
                echo "                ";
                if (($this->getAttribute($context["field"], "type", array()) != "submit")) {
                    // line 59
                    echo "                  ";
                    echo $context["key"];
                    echo ": \$(\"#simple_form-field-";
                    echo $context["key"];
                    echo "\").val(),
                ";
                }
                // line 61
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "            }
          }).done(function() {
            \$('#simple_form-success').html(\"<div class='alert alert-success'>\");
            \$('#simple_form-success > .alert-success').html(\"<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;\").append(\"</button>\");
            \$('#simple_form-success > .alert-success').append(\"<strong>";
            // line 66
            echo $this->getAttribute((isset($context["messages"]) ? $context["messages"] : null), "success", array());
            echo "</strong>\");
            \$('#simple_form-success > .alert-success').append('</div>');

            //clear all fields
            \$('#simple_form').trigger(\"reset\");
          });

        return false;
      })
    });
  </script>

";
        }
    }

    public function getTemplateName()
    {
        return "plugins/simple_form/simple_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 66,  229 => 62,  223 => 61,  215 => 59,  212 => 58,  208 => 57,  203 => 55,  193 => 47,  186 => 45,  174 => 42,  171 => 41,  169 => 40,  164 => 39,  160 => 38,  154 => 34,  147 => 32,  128 => 28,  125 => 27,  123 => 26,  118 => 25,  114 => 24,  109 => 21,  102 => 19,  69 => 15,  66 => 14,  63 => 13,  42 => 9,  39 => 8,  37 => 7,  32 => 6,  28 => 5,  21 => 2,  19 => 1,);
    }
}
