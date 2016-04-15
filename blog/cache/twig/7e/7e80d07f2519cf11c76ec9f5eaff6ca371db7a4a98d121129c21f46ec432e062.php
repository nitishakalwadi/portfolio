<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_1f92375a15f7df9e11a95efe60534b07f15f4fc5ccd5bd7bbebbcb3212ba9f89 extends Twig_Template
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
        if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 2
            echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"";
            echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
            echo "/css/item.css\" />
";
        }
        // line 4
        echo "<div class=\"post\">
  <div class=\"entry-container\">
    <div class=\"entry-content\">

      ";
        // line 8
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array())) {
            // line 9
            echo "      <h1 class=\"entry-title\">
        ";
            // line 10
            if ( !($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
                // line 11
                echo "          <a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\"><i class=\"fa fa-angle-double-right\"></i></a>
        ";
            }
            // line 13
            echo "          <a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a>
      </h1>
      ";
        } else {
            // line 16
            echo "      <h1 class=\"entry-title\"><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a></h1>
      ";
        }
        // line 18
        echo "      ";
        if ((isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 19
            echo "
        <div class=\"meta\">
          <div><i class=\"fa fa-clock-o\"></i> ";
            // line 21
            echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "dateformat", array()), "long", array()));
            echo "</div>
          <!--
          <div><i class=\"fa fa-user\"></i> <span style=\"color:#E74C3C\">
            ";
            // line 24
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array()), "name", array()) || $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array()))) {
                // line 25
                echo "            ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array()), "name", array())) {
                    // line 26
                    echo "            ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array()), "url", array())) {
                        // line 27
                        echo "            <a href=\"";
                        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array()), "url", array());
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array()), "name", array());
                        echo "</a>
            ";
                    } else {
                        // line 29
                        echo "            ";
                        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array()), "name", array());
                        echo "
            ";
                    }
                    // line 31
                    echo "            ";
                } else {
                    // line 32
                    echo "            ";
                    if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "url", array())) {
                        // line 33
                        echo "            <a href=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "url", array());
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array());
                        echo "</a>
            ";
                    } else {
                        // line 35
                        echo "            ";
                        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array());
                        echo "
            ";
                    }
                    // line 37
                    echo "            ";
                }
                // line 38
                echo "            ";
            }
            // line 39
            echo "          </span></div>
          -->
          ";
            // line 41
            if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array())) {
                // line 42
                echo "          <div> <i class=\"fa fa-tags\"></i>
            ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 44
                    echo "            <a href=\"";
                    echo (isset($context["base_url"]) ? $context["base_url"] : null);
                    echo "/tag:";
                    echo $context["tag"];
                    echo "\" rel=\"tag\">";
                    echo $context["tag"];
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ", ";
                    }
                    echo "</a>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "          </div>
          ";
            }
            // line 48
            echo "        </div>
      ";
        } else {
            // line 50
            echo "      <div class=\"meta1\">
        <p>
          <small>
            <span><i class=\"fa fa-clock-o\"></i> ";
            // line 53
            echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "dateformat", array()), "long", array()));
            echo "</span>
            <!--
            <span><i class=\"fa fa-user\"></i>
              ";
            // line 56
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array()), "name", array()) || $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array()))) {
                // line 57
                echo "              ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array()), "name", array())) {
                    // line 58
                    echo "              ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array()), "url", array())) {
                        // line 59
                        echo "              <a href=\"";
                        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array()), "url", array());
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array()), "name", array());
                        echo "</a>
              ";
                    } else {
                        // line 61
                        echo "              ";
                        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array()), "name", array());
                        echo "
              ";
                    }
                    // line 63
                    echo "              ";
                } else {
                    // line 64
                    echo "              ";
                    if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "url", array())) {
                        // line 65
                        echo "              <a href=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "url", array());
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array());
                        echo "</a>
              ";
                    } else {
                        // line 67
                        echo "              ";
                        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array());
                        echo "
              ";
                    }
                    // line 69
                    echo "              ";
                }
                // line 70
                echo "              ";
            }
            // line 71
            echo "            </span>
            -->
            ";
            // line 73
            if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array())) {
                // line 74
                echo "            <span> <i class=\"fa fa-tags\"></i>
              ";
                // line 75
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 76
                    echo "              <a href=\"";
                    echo (isset($context["base_url"]) ? $context["base_url"] : null);
                    echo "/tag:";
                    echo $context["tag"];
                    echo "\" rel=\"tag\">";
                    echo $context["tag"];
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ", ";
                    }
                    echo "</a>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "            </span>
            ";
            }
            // line 80
            echo "          </small>
        </p>
      </div>
      ";
        }
        // line 84
        echo "
      <div class=\"clear\"></div>

      <div class=\"";
        // line 87
        if ((isset($context["truncate"]) ? $context["truncate"] : null)) {
            echo "entry-";
            if ((($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "youtube", array()) || $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "soundcloud", array())) || $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "vimeo", array()))) {
                echo "video";
            } else {
                echo "image";
            }
        } else {
            echo " resp_video";
        }
        echo "\">
        ";
        // line 88
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "youtube", array())) {
            // line 89
            echo "        <iframe src=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "youtube", array());
            echo "?showinfo=0\" frameborder=\"0\" allowfullscreen style=\"width: 750px; height: 421.429px; ";
            if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
                echo "width: 680px;height: 392px;";
            }
            echo "\"></iframe>
        ";
        }
        // line 91
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "vimeo", array())) {
            // line 92
            echo "        <iframe src=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "vimeo", array());
            echo "\" frameborder=\"0\" allowfullscreen=\"\" data-aspectratio=\"0.5619047619047619\" style=\"width: 750px; height: 421.429px; ";
            if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
                echo "width: 680px;height: 392px;";
            }
            echo "\"></iframe>
        ";
        }
        // line 94
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "soundcloud", array())) {
            // line 95
            echo "        <iframe width=\"100%\" height=\"403\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "soundcloud", array());
            echo "&amp;auto_play=false&amp;hide_related=true&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true&amp;buying=false\"></iframe>
        ";
        }
        // line 97
        echo "        ";
        if (twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()))) {
            // line 98
            echo "          ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "cropZoom", array(0 => 750, 1 => 422), "method"), "html", array(0 => "", 1 => "", 2 => "thumb"), "method");
            echo "
        ";
        }
        // line 100
        echo "      </div>

            ";
        // line 102
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
            // line 103
            echo "            ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
            ";
            // line 104
            if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
                // line 105
                echo "            ";
                $context["show_prev_next"] = true;
                // line 106
                echo "            ";
            }
            // line 107
            echo "            ";
        } elseif (((isset($context["truncate"]) ? $context["truncate"] : null) && ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())))) {
            // line 108
            echo "            ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array());
            echo "
            ";
        } elseif (        // line 109
(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 110
            echo "            ";
            echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), 550));
            echo "
            ";
        } else {
            // line 112
            echo "            ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
            ";
            // line 113
            $context["show_prev_next"] = true;
            // line 114
            echo "            ";
        }
        // line 115
        echo "
            <div class=\"entry-meta clearfix\">
              <div class=\"up_arrow\"></div>
              <div class=\"pull-right share-story-container\">
                <ul class=\"share-story\">
                  <li>
                    <a href=\"http://www.facebook.com/share.php?u=";
        // line 121
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "\" target=\"_blank\">
                      <i class=\"fa fa-facebook\"></i>
                    </a>
                  </li>
                  <li>
                    <a href=\"http://twitter.com/home?status=";
        // line 126
        echo twig_replace_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), array(" " => "%20"));
        echo "-";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "\" target=\"_blank\">
                      <i class=\"fa fa-twitter\"></i>
                    </a>
                  </li>
                  <li>
                    <a href=\"http://digg.com/submit?url=";
        // line 131
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "&amp;title=";
        echo twig_replace_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), array(" " => "%20"));
        echo "\" target=\"_blank\">
                      <i class=\"fa fa-digg\"></i>
                    </a>
                  </li>
                  <li>
                    <a href=\"http://reddit.com/submit?url=";
        // line 136
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "&amp;title=";
        echo twig_replace_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), array(" " => "%20"));
        echo "\" target=\"_blank\">
                      <i class=\"fa fa-reddit\"></i>
                    </a>
                  </li>
                  <li>
                    <a href=\"http://www.linkedin.com/shareArticle?mini=true&amp;url=";
        // line 141
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "&amp;title=";
        echo twig_replace_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), array(" " => "%20"));
        echo "\" target=\"_blank\">
                      <i class=\"fa fa-linkedin\"></i>
                    </a>
                  </li>
                </ul>
              </div>

              ";
        // line 148
        if ( !($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
            // line 149
            echo "                ";
            if (((isset($context["truncate"]) ? $context["truncate"] : null) && ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())))) {
                // line 150
                echo "                  <div class=\"pull-left\"><a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\" class=\"read-more\">Continue Reading</a></div>
                ";
            } elseif (            // line 151
(isset($context["truncate"]) ? $context["truncate"] : null)) {
                // line 152
                echo "                  <div class=\"pull-left\"><a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\" class=\"read-more\">Continue Reading</a></div>
                ";
            }
            // line 154
            echo "              ";
        }
        // line 155
        echo "              <div class=\"clear\"></div>
            </div>

            <!--
            ";
        // line 159
        if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 160
            echo "            <div class=\"author-meta box\">
              ";
            // line 161
            if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array())) {
                // line 162
                echo "              ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array()), "logo", array()) || $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array()), "gravatar", array()))) {
                    // line 163
                    echo "              <div class=\"author-image\">
                ";
                    // line 164
                    if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array()), "gravatar", array())) {
                        // line 165
                        echo "                  <img src=\"http://www.gravatar.com/avatar/";
                        echo $this->env->getExtension('GravTwigExtension')->md5Filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array()), "gravatar", array()));
                        echo "?s=90\" class=\"avatar-author\" alt=\"Gravatar\"/>
                ";
                    } elseif ($this->getAttribute($this->getAttribute($this->getAttribute(                    // line 166
(isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array()), "logo", array())) {
                        // line 167
                        echo "                  <img src=\"";
                        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array()), "logo", array()), array(), "array"), "url", array());
                        echo "\" class=\"avatar-author\" />
                ";
                    }
                    // line 169
                    echo "              </div>
              ";
                }
                // line 171
                echo "              <div class=\"author-body\">
                <h2 class=\"vcard author\">
                  ";
                // line 173
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array()), "url", array())) {
                    // line 174
                    echo "                  <a href=\"";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array()), "url", array());
                    echo "\" rel=\"author\">";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array()), "name", array());
                    echo "</a>
                  ";
                } else {
                    // line 176
                    echo "                  ";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array()), "name", array());
                    echo "
                  ";
                }
                // line 178
                echo "                </h2>
                <p>
                  ";
                // line 180
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array()), "description", array());
                echo "
                </p>
              </div>
              ";
            } else {
                // line 184
                echo "              ";
                if (($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "logo", array()) || $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "gravatar", array()))) {
                    // line 185
                    echo "              <div class=\"author-image\">
                ";
                    // line 186
                    if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "gravatar", array())) {
                        // line 187
                        echo "                  <img src=\"http://www.gravatar.com/avatar/";
                        echo $this->env->getExtension('GravTwigExtension')->md5Filter($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "gravatar", array()));
                        echo "?s=90\" class=\"avatar-author\" alt=\"Gravatar\"/>
                ";
                    } elseif ($this->getAttribute($this->getAttribute(                    // line 188
(isset($context["site"]) ? $context["site"] : null), "author", array()), "logo", array())) {
                        // line 189
                        echo "                  <img src=\"";
                        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
                        echo "/images/";
                        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "logo", array());
                        echo "\" class=\"avatar-author\" />
                ";
                    }
                    // line 191
                    echo "              </div>
              ";
                }
                // line 193
                echo "              <div class=\"author-body\">
                <h2 class=\"vcard author\">
                  ";
                // line 195
                if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "url", array())) {
                    // line 196
                    echo "                  <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "url", array());
                    echo "\" rel=\"author\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array());
                    echo "</a>
                  ";
                } else {
                    // line 198
                    echo "                  ";
                    echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array());
                    echo "
                  ";
                }
                // line 200
                echo "                </h2>
                <p>
                  ";
                // line 202
                echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "description", array());
                echo "
                </p>
              </div>
              ";
            }
            // line 206
            echo "
              <div class=\"clear\"></div>
            </div>
            ";
        }
        // line 210
        echo "            -->

            ";
        // line 212
        if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 213
            echo "            <div class=\"related_posts\">
              <div id=\"related-posts\">
                <div class=\"title\">
                  <h4>Related Posts</h4>
                </div>
                <div class=\"carousel_related owl-carousel owl-theme\" id=\"owl-demo\">
                  ";
            // line 219
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/blog_item.html.twig", 219)->display($context);
            // line 220
            echo "                </div>
              </div>
              <div style=\"clear:both\"></div>
            </div>
            <script type='text/javascript'>
              \$(document).ready(function() {
                \$(\"#owl-demo\").owlCarousel({
                  autoPlay: 3000,
                  items : 3,
                  itemsDesktop : [1200,3],
                  itemsDesktopSmall : [980,2],
                  itemsMobile : [480,1]
                });
              });
              </script>
            ";
        }
        // line 236
        echo "
      ";
        // line 237
        if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 238
            echo "        ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "jscomments", array()), "enabled", array()) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "jscomments", array()), "provider", array()))) {
                // line 239
                echo "        <div class=\"comments\" id=\"comments\">
          <h4>Comments:</h3>
          <div class=\"comments-content\">
            ";
                // line 242
                echo call_user_func_array($this->env->getFunction('jscomments')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "jscomments", array()), "provider", array())));
                echo "
          </div>
        </div>
        ";
            }
            // line 246
            echo "
        ";
            // line 247
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "comments", array()), "enabled", array())) {
                // line 248
                echo "        <div class=\"comments\" id=\"comments\">
          <h4>";
                // line 249
                echo twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array()), "comments", array()));
                echo " Comments:</h3>
          <div class=\"comments-content\">
            ";
                // line 251
                $this->loadTemplate("partials/comments.html.twig", "partials/blog_item.html.twig", 251)->display(array_merge($context, array("page" => (isset($context["page"]) ? $context["page"] : null))));
                // line 252
                echo "          </div>
        </div>
        ";
            }
            // line 255
            echo "
      ";
        }
        // line 257
        echo "    </div>
  </div>
</div>

";
        // line 261
        if ((isset($context["show_prev_next"]) ? $context["show_prev_next"] : null)) {
            // line 262
            echo "<div class=\"blog-pager\" id=\"blog-pager\">
  ";
            // line 263
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isFirst", array())) {
                // line 264
                echo "  <span id=\"blog-pager-newer-link\">
    <a class=\"blog-pager-newer-link\" href=\"";
                // line 265
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "url", array());
                echo "\"><i class=\"fa fa-chevron-left\"></i> Newer Post</a>
  </span>
  ";
            }
            // line 268
            echo "
  ";
            // line 269
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isLast", array())) {
                // line 270
                echo "  <span id=\"blog-pager-older-link\">
    <a class=\"blog-pager-older-link\" href=\"";
                // line 271
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "url", array());
                echo "\">Older Post <i class=\"fa fa-chevron-right\"></i></a>
  </span>
  ";
            }
            // line 274
            echo "  <a class=\"home-link\" href=\"";
            echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
            echo "\">Home</a>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  733 => 274,  727 => 271,  724 => 270,  722 => 269,  719 => 268,  713 => 265,  710 => 264,  708 => 263,  705 => 262,  703 => 261,  697 => 257,  693 => 255,  688 => 252,  686 => 251,  681 => 249,  678 => 248,  676 => 247,  673 => 246,  666 => 242,  661 => 239,  658 => 238,  656 => 237,  653 => 236,  635 => 220,  633 => 219,  625 => 213,  623 => 212,  619 => 210,  613 => 206,  606 => 202,  602 => 200,  596 => 198,  588 => 196,  586 => 195,  582 => 193,  578 => 191,  570 => 189,  568 => 188,  563 => 187,  561 => 186,  558 => 185,  555 => 184,  548 => 180,  544 => 178,  538 => 176,  530 => 174,  528 => 173,  524 => 171,  520 => 169,  514 => 167,  512 => 166,  507 => 165,  505 => 164,  502 => 163,  499 => 162,  497 => 161,  494 => 160,  492 => 159,  486 => 155,  483 => 154,  477 => 152,  475 => 151,  470 => 150,  467 => 149,  465 => 148,  453 => 141,  443 => 136,  433 => 131,  423 => 126,  415 => 121,  407 => 115,  404 => 114,  402 => 113,  397 => 112,  391 => 110,  389 => 109,  384 => 108,  381 => 107,  378 => 106,  375 => 105,  373 => 104,  368 => 103,  366 => 102,  362 => 100,  356 => 98,  353 => 97,  347 => 95,  344 => 94,  334 => 92,  331 => 91,  321 => 89,  319 => 88,  306 => 87,  301 => 84,  295 => 80,  291 => 78,  267 => 76,  250 => 75,  247 => 74,  245 => 73,  241 => 71,  238 => 70,  235 => 69,  229 => 67,  221 => 65,  218 => 64,  215 => 63,  209 => 61,  201 => 59,  198 => 58,  195 => 57,  193 => 56,  187 => 53,  182 => 50,  178 => 48,  174 => 46,  150 => 44,  133 => 43,  130 => 42,  128 => 41,  124 => 39,  121 => 38,  118 => 37,  112 => 35,  104 => 33,  101 => 32,  98 => 31,  92 => 29,  84 => 27,  81 => 26,  78 => 25,  76 => 24,  70 => 21,  66 => 19,  63 => 18,  55 => 16,  46 => 13,  40 => 11,  38 => 10,  35 => 9,  33 => 8,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if not truncate %}*/
/* <link type="text/css" rel="stylesheet" href="{{ theme_url }}/css/item.css" />*/
/* {% endif %}*/
/* <div class="post">*/
/*   <div class="entry-container">*/
/*     <div class="entry-content">*/
/* */
/*       {% if page.header.link %}*/
/*       <h1 class="entry-title">*/
/*         {% if page.header.continue_link is not sameas(false) %}*/
/*           <a href="{{ page.url }}"><i class="fa fa-angle-double-right"></i></a>*/
/*         {% endif %}*/
/*           <a href="{{ page.header.link }}">{{ page.title }}</a>*/
/*       </h1>*/
/*       {% else %}*/
/*       <h1 class="entry-title"><a href="{{ page.url }}">{{ page.title }}</a></h1>*/
/*       {% endif %}*/
/*       {% if truncate %}*/
/* */
/*         <div class="meta">*/
/*           <div><i class="fa fa-clock-o"></i> {{ page.date|date(config.system.pages.dateformat.long) }}</div>*/
/*           <!--*/
/*           <div><i class="fa fa-user"></i> <span style="color:#E74C3C">*/
/*             {% if page.header.author.name or site.author.name %}*/
/*             {% if page.header.author.name %}*/
/*             {% if page.header.author.url %}*/
/*             <a href="{{ page.header.author.url }}">{{ page.header.author.name }}</a>*/
/*             {% else %}*/
/*             {{ page.header.author.name }}*/
/*             {% endif %}*/
/*             {% else %}*/
/*             {% if site.author.url %}*/
/*             <a href="{{ site.author.url }}">{{ site.author.name }}</a>*/
/*             {% else %}*/
/*             {{ site.author.name }}*/
/*             {% endif %}*/
/*             {% endif %}*/
/*             {% endif %}*/
/*           </span></div>*/
/*           -->*/
/*           {% if page.taxonomy.tag %}*/
/*           <div> <i class="fa fa-tags"></i>*/
/*             {% for tag in page.taxonomy.tag %}*/
/*             <a href="{{ base_url }}/tag:{{ tag }}" rel="tag">{{ tag }}{% if not loop.last %}, {% endif %}</a>*/
/*             {% endfor %}*/
/*           </div>*/
/*           {% endif %}*/
/*         </div>*/
/*       {% else %}*/
/*       <div class="meta1">*/
/*         <p>*/
/*           <small>*/
/*             <span><i class="fa fa-clock-o"></i> {{ page.date|date(config.system.pages.dateformat.long) }}</span>*/
/*             <!--*/
/*             <span><i class="fa fa-user"></i>*/
/*               {% if page.header.author.name or site.author.name %}*/
/*               {% if page.header.author.name %}*/
/*               {% if page.header.author.url %}*/
/*               <a href="{{ page.header.author.url }}">{{ page.header.author.name }}</a>*/
/*               {% else %}*/
/*               {{ page.header.author.name }}*/
/*               {% endif %}*/
/*               {% else %}*/
/*               {% if site.author.url %}*/
/*               <a href="{{ site.author.url }}">{{ site.author.name }}</a>*/
/*               {% else %}*/
/*               {{ site.author.name }}*/
/*               {% endif %}*/
/*               {% endif %}*/
/*               {% endif %}*/
/*             </span>*/
/*             -->*/
/*             {% if page.taxonomy.tag %}*/
/*             <span> <i class="fa fa-tags"></i>*/
/*               {% for tag in page.taxonomy.tag %}*/
/*               <a href="{{ base_url }}/tag:{{ tag }}" rel="tag">{{ tag }}{% if not loop.last %}, {% endif %}</a>*/
/*               {% endfor %}*/
/*             </span>*/
/*             {% endif %}*/
/*           </small>*/
/*         </p>*/
/*       </div>*/
/*       {% endif %}*/
/* */
/*       <div class="clear"></div>*/
/* */
/*       <div class="{% if truncate %}entry-{% if page.header.youtube or page.header.soundcloud or page.header.vimeo %}video{% else %}image{% endif %}{% else %} resp_video{% endif %}">*/
/*         {% if page.header.youtube %}*/
/*         <iframe src="{{ page.header.youtube }}?showinfo=0" frameborder="0" allowfullscreen style="width: 750px; height: 421.429px; {% if not truncate %}width: 680px;height: 392px;{% endif %}"></iframe>*/
/*         {% endif %}*/
/*         {% if page.header.vimeo %}*/
/*         <iframe src="{{ page.header.vimeo }}" frameborder="0" allowfullscreen="" data-aspectratio="0.5619047619047619" style="width: 750px; height: 421.429px; {% if not truncate %}width: 680px;height: 392px;{% endif %}"></iframe>*/
/*         {% endif %}*/
/*         {% if page.header.soundcloud %}*/
/*         <iframe width="100%" height="403" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/{{ page.header.soundcloud }}&amp;auto_play=false&amp;hide_related=true&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true&amp;buying=false"></iframe>*/
/*         {% endif %}*/
/*         {% if page.media.images|first %}*/
/*           {{ page.media.images|first.cropZoom(750,422).html('','', 'thumb') }}*/
/*         {% endif %}*/
/*       </div>*/
/* */
/*             {% if page.header.continue_link is sameas(false) %}*/
/*             {{ page.content }}*/
/*             {% if not truncate %}*/
/*             {% set show_prev_next = true %}*/
/*             {% endif %}*/
/*             {% elseif truncate and page.summary != page.content %}*/
/*             {{ page.summary }}*/
/*             {% elseif truncate %}*/
/*             {{ page.content|truncate(550) }}*/
/*             {% else %}*/
/*             {{ page.content }}*/
/*             {% set show_prev_next = true %}*/
/*             {% endif %}*/
/* */
/*             <div class="entry-meta clearfix">*/
/*               <div class="up_arrow"></div>*/
/*               <div class="pull-right share-story-container">*/
/*                 <ul class="share-story">*/
/*                   <li>*/
/*                     <a href="http://www.facebook.com/share.php?u={{ page.url(true) }}" target="_blank">*/
/*                       <i class="fa fa-facebook"></i>*/
/*                     </a>*/
/*                   </li>*/
/*                   <li>*/
/*                     <a href="http://twitter.com/home?status={{ page.title|replace({' ': "%20"}) }}-{{ page.url(true) }}" target="_blank">*/
/*                       <i class="fa fa-twitter"></i>*/
/*                     </a>*/
/*                   </li>*/
/*                   <li>*/
/*                     <a href="http://digg.com/submit?url={{ page.url(true) }}&amp;title={{ page.title|replace({' ': "%20"}) }}" target="_blank">*/
/*                       <i class="fa fa-digg"></i>*/
/*                     </a>*/
/*                   </li>*/
/*                   <li>*/
/*                     <a href="http://reddit.com/submit?url={{ page.url(true) }}&amp;title={{ page.title|replace({' ': "%20"}) }}" target="_blank">*/
/*                       <i class="fa fa-reddit"></i>*/
/*                     </a>*/
/*                   </li>*/
/*                   <li>*/
/*                     <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{ page.url(true) }}&amp;title={{ page.title|replace({' ': "%20"}) }}" target="_blank">*/
/*                       <i class="fa fa-linkedin"></i>*/
/*                     </a>*/
/*                   </li>*/
/*                 </ul>*/
/*               </div>*/
/* */
/*               {% if page.header.continue_link is not sameas(false) %}*/
/*                 {% if truncate and page.summary != page.content %}*/
/*                   <div class="pull-left"><a href="{{ page.url }}" class="read-more">Continue Reading</a></div>*/
/*                 {% elseif truncate %}*/
/*                   <div class="pull-left"><a href="{{ page.url }}" class="read-more">Continue Reading</a></div>*/
/*                 {% endif %}*/
/*               {% endif %}*/
/*               <div class="clear"></div>*/
/*             </div>*/
/* */
/*             <!--*/
/*             {% if not truncate %}*/
/*             <div class="author-meta box">*/
/*               {% if page.header.author %}*/
/*               {% if page.header.author.logo or page.header.author.gravatar %}*/
/*               <div class="author-image">*/
/*                 {% if page.header.author.gravatar %}*/
/*                   <img src="http://www.gravatar.com/avatar/{{ page.header.author.gravatar|md5 }}?s=90" class="avatar-author" alt="Gravatar"/>*/
/*                 {% elseif page.header.author.logo  %}*/
/*                   <img src="{{ page.media.images[page.header.author.logo].url }}" class="avatar-author" />*/
/*                 {% endif %}*/
/*               </div>*/
/*               {% endif %}*/
/*               <div class="author-body">*/
/*                 <h2 class="vcard author">*/
/*                   {% if page.header.author.url %}*/
/*                   <a href="{{ page.header.author.url }}" rel="author">{{ page.header.author.name }}</a>*/
/*                   {% else %}*/
/*                   {{ page.header.author.name }}*/
/*                   {% endif %}*/
/*                 </h2>*/
/*                 <p>*/
/*                   {{ page.header.author.description }}*/
/*                 </p>*/
/*               </div>*/
/*               {% else %}*/
/*               {% if site.author.logo or site.author.gravatar %}*/
/*               <div class="author-image">*/
/*                 {% if site.author.gravatar  %}*/
/*                   <img src="http://www.gravatar.com/avatar/{{ site.author.gravatar|md5 }}?s=90" class="avatar-author" alt="Gravatar"/>*/
/*                 {% elseif site.author.logo  %}*/
/*                   <img src="{{ theme_url }}/images/{{ site.author.logo }}" class="avatar-author" />*/
/*                 {% endif %}*/
/*               </div>*/
/*               {% endif %}*/
/*               <div class="author-body">*/
/*                 <h2 class="vcard author">*/
/*                   {% if site.author.url %}*/
/*                   <a href="{{ site.author.url }}" rel="author">{{ site.author.name }}</a>*/
/*                   {% else %}*/
/*                   {{ site.author.name }}*/
/*                   {% endif %}*/
/*                 </h2>*/
/*                 <p>*/
/*                   {{ site.author.description }}*/
/*                 </p>*/
/*               </div>*/
/*               {% endif %}*/
/* */
/*               <div class="clear"></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             -->*/
/* */
/*             {% if not truncate %}*/
/*             <div class="related_posts">*/
/*               <div id="related-posts">*/
/*                 <div class="title">*/
/*                   <h4>Related Posts</h4>*/
/*                 </div>*/
/*                 <div class="carousel_related owl-carousel owl-theme" id="owl-demo">*/
/*                   {% include 'partials/relatedpages.html.twig' %}*/
/*                 </div>*/
/*               </div>*/
/*               <div style="clear:both"></div>*/
/*             </div>*/
/*             <script type='text/javascript'>*/
/*               $(document).ready(function() {*/
/*                 $("#owl-demo").owlCarousel({*/
/*                   autoPlay: 3000,*/
/*                   items : 3,*/
/*                   itemsDesktop : [1200,3],*/
/*                   itemsDesktopSmall : [980,2],*/
/*                   itemsMobile : [480,1]*/
/*                 });*/
/*               });*/
/*               </script>*/
/*             {% endif %}*/
/* */
/*       {% if not truncate %}*/
/*         {% if config.plugins.jscomments.enabled and config.plugins.jscomments.provider %}*/
/*         <div class="comments" id="comments">*/
/*           <h4>Comments:</h3>*/
/*           <div class="comments-content">*/
/*             {{ jscomments(config.plugins.jscomments.provider) }}*/
/*           </div>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         {% if config.plugins.comments.enabled %}*/
/*         <div class="comments" id="comments">*/
/*           <h4>{{ grav.twig.comments|length }} Comments:</h3>*/
/*           <div class="comments-content">*/
/*             {% include 'partials/comments.html.twig' with {'page': page} %}*/
/*           </div>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* {% if show_prev_next %}*/
/* <div class="blog-pager" id="blog-pager">*/
/*   {% if not page.isFirst %}*/
/*   <span id="blog-pager-newer-link">*/
/*     <a class="blog-pager-newer-link" href="{{ page.nextSibling.url }}"><i class="fa fa-chevron-left"></i> Newer Post</a>*/
/*   </span>*/
/*   {% endif %}*/
/* */
/*   {% if not page.isLast %}*/
/*   <span id="blog-pager-older-link">*/
/*     <a class="blog-pager-older-link" href="{{ page.prevSibling.url }}">Older Post <i class="fa fa-chevron-right"></i></a>*/
/*   </span>*/
/*   {% endif %}*/
/*   <a class="home-link" href="{{ base_url_absolute }}">Home</a>*/
/* </div>*/
/* {% endif %}*/
/* */
