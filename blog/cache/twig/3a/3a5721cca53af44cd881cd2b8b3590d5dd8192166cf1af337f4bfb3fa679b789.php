<?php

/* partials/comments.html.twig */
class __TwigTemplate_a7c9a757ef22d33e8eaa482bd88c68d056329e6da896b27c524b0413371abcd7 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array()), "enable", array())) {
            // line 2
            echo "    ";
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array()), "comments", array()))) {
                // line 3
                echo "    <div class=\"comment-holder\">
      <div class=\"comment-thread\">
        <ol>
          ";
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(array_reverse($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array()), "comments", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 7
                    echo "          <li class=\"comment\">
            <div class=\"comment-block\">
              <div id=\"bc_0_2M\" class=\"comment-header\" kind=\"m\">
                <cite class=\"user blog-author\">";
                    // line 10
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "author", array()));
                    echo "</cite>
                <span class=\"datetime secondary-text\">
                  ";
                    // line 12
                    echo $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_COMMENTS.WRITTEN_ON");
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "date", array()));
                    echo "
                </span>
              </div>
              ";
                    // line 15
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", array()));
                    echo "
              <br />
            </div>
          </li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "        </ol>
      </div>
    </div>
    ";
            }
            // line 24
            echo "
    <div class=\"comment-replybox-thread\">
    <form name=\"";
            // line 26
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "name", array());
            echo "\"
          action=\"";
            // line 27
            echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "action", array())) ? (((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "action", array()))) : ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array())));
            echo "\"
          method=\"";
            // line 28
            echo _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "method", array())), "POST");
            echo "\">
    ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "fields", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 30
                echo "
        ";
                // line 31
                $context["value"] = $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
                // line 32
                echo "        ";
                if ($this->getAttribute($context["field"], "evaluateDefault", array())) {
                    // line 33
                    echo "            ";
                    $context["value"] = $this->env->getExtension('GravTwigExtension')->evaluateFunc($this->getAttribute($context["field"], "evaluateDefault", array()));
                    // line 34
                    echo "        ";
                }
                // line 35
                echo "        <div>
            ";
                // line 36
                $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), "partials/comments.html.twig", 36)->display($context);
                // line 37
                echo "        </div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "
        <div class=\"buttons\">
        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "buttons", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 42
                echo "            <button class=\"btn\" type=\"";
                echo (($this->getAttribute($context["button"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "type", array()), "submit")) : ("submit"));
                echo "\">";
                echo (($this->getAttribute($context["button"], "value", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "value", array()), "Submit")) : ("Submit"));
                echo "</button>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        </div>

        ";
            // line 46
            echo $this->env->getExtension('GravTwigExtension')->nonceFieldFunc("form", "form-nonce");
            echo "
    </form>

    ";
            // line 49
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array())) {
                // line 50
                echo "    <div class=\"alert\">";
                echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array());
                echo "</div>
    ";
            }
            // line 52
            echo "    </div>

";
        }
    }

    public function getTemplateName()
    {
        return "partials/comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 52,  166 => 50,  164 => 49,  158 => 46,  154 => 44,  143 => 42,  139 => 41,  135 => 39,  120 => 37,  118 => 36,  115 => 35,  112 => 34,  109 => 33,  106 => 32,  104 => 31,  101 => 30,  84 => 29,  80 => 28,  76 => 27,  72 => 26,  68 => 24,  62 => 20,  51 => 15,  43 => 12,  38 => 10,  33 => 7,  29 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if grav.twig.enable %}*/
/*     {% if grav.twig.comments|length %}*/
/*     <div class="comment-holder">*/
/*       <div class="comment-thread">*/
/*         <ol>*/
/*           {% for comment in grav.twig.comments|array_reverse %}*/
/*           <li class="comment">*/
/*             <div class="comment-block">*/
/*               <div id="bc_0_2M" class="comment-header" kind="m">*/
/*                 <cite class="user blog-author">{{comment.author|e}}</cite>*/
/*                 <span class="datetime secondary-text">*/
/*                   {{'PLUGIN_COMMENTS.WRITTEN_ON'|t}} {{comment.date|e}}*/
/*                 </span>*/
/*               </div>*/
/*               {{comment.text|e}}*/
/*               <br />*/
/*             </div>*/
/*           </li>*/
/*           {% endfor %}*/
/*         </ol>*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/* */
/*     <div class="comment-replybox-thread">*/
/*     <form name="{{ grav.config.plugins.comments.form.name }}"*/
/*           action="{{ grav.config.plugins.comments.form.action ?  base_url ~ grav.config.plugins.comments.form.action : page.url }}"*/
/*           method="{{ grav.config.plugins.comments.form.method|upper|default('POST') }}">*/
/*     {% for field in grav.config.plugins.comments.form.fields %}*/
/* */
/*         {% set value = form.value(field.name) %}*/
/*         {% if field.evaluateDefault %}*/
/*             {% set value = evaluate(field.evaluateDefault) %}*/
/*         {% endif %}*/
/*         <div>*/
/*             {% include "forms/fields/#{field.type}/#{field.type}.html.twig" %}*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/*         <div class="buttons">*/
/*         {% for button in grav.config.plugins.comments.form.buttons %}*/
/*             <button class="btn" type="{{ button.type|default('submit') }}">{{ button.value|default('Submit') }}</button>*/
/*         {% endfor %}*/
/*         </div>*/
/* */
/*         {{ nonce_field('form', 'form-nonce') }}*/
/*     </form>*/
/* */
/*     {% if form.message %}*/
/*     <div class="alert">{{ form.message }}</div>*/
/*     {% endif %}*/
/*     </div>*/
/* */
/* {% endif %}*/
/* */
