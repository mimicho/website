<?php

/* themes/nextgeneration/templates/page.html.twig */
class __TwigTemplate_c24c1c779af1c52a06ab313e542f3f15402ac9177afd1531b71aa10fdbe450dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'highlighted' => array($this, 'block_highlighted'),
            'highlighted_mobile' => array($this, 'block_highlighted_mobile'),
            'stories' => array($this, 'block_stories'),
            'services' => array($this, 'block_services'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 54, "if" => 56, "block" => 57);
        $filters = array("clean_class" => 62, "t" => 74);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 54
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 56
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 57
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 94
        echo "
";
        // line 96
        $this->displayBlock('main', $context, $blocks);
        // line 180
        echo "
";
        // line 181
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 182
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 57
    public function block_navbar($context, array $blocks = array())
    {
        // line 58
        echo "    ";
        // line 59
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 61
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 62
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : ((isset($context["container"]) ? $context["container"] : null))));
        // line 65
        echo "    <header";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "addClass", array(0 => (isset($context["navbar_classes"]) ? $context["navbar_classes"] : null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 66
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method")) {
            // line 67
            echo "        <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
            echo "\">
      ";
        }
        // line 69
        echo "      <div class=\"navbar-header\">
        ";
        // line 70
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 72
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 73
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 74
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 80
        echo "      </div>

      ";
        // line 83
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 84
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 85
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 88
        echo "      ";
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method")) {
            // line 89
            echo "        </div>
      ";
        }
        // line 91
        echo "    </header>
  ";
    }

    // line 96
    public function block_main($context, array $blocks = array())
    {
        // line 97
        echo "  
\t";
        // line 98
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            echo " 
          <section class=\"home-slider hidden-sm hidden-xs\">
           
                  ";
            // line 102
            echo "                  ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
                // line 103
                echo "                    ";
                $this->displayBlock('highlighted', $context, $blocks);
                // line 106
                echo "                  ";
            }
            // line 107
            echo "
                
          </section> 

          <section class=\"home-slider hidden-lg hidden-md\" >
           
                  ";
            // line 114
            echo "                  ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted_mobile", array())) {
                // line 115
                echo "                    ";
                $this->displayBlock('highlighted_mobile', $context, $blocks);
                // line 118
                echo "                  ";
            }
            // line 119
            echo "
                
          </section> 

          <section class=\"stories\" >

                <div class=\"container\" >
                      <div class=\"row\">
                     ";
            // line 128
            echo "                      <div style=\"margin-top:100px;margin-bottom:100px;\">

                            ";
            // line 130
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "stories", array())) {
                // line 131
                echo "                            ";
                $this->displayBlock('stories', $context, $blocks);
                // line 134
                echo "                          ";
            }
            echo " 

                      </div>

                          
                      </div>    
                </div>

          </section>


          <section class=\"service\">

                <div class=\"container\">
                      <div class=\"row\">
                        <div class=\"col-lg-12\">
                     ";
            // line 151
            echo "                          ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "services", array())) {
                // line 152
                echo "                            ";
                $this->displayBlock('services', $context, $blocks);
                // line 155
                echo "                          ";
            }
            echo " 
                        </div> 
                    </div>   
                </div>

          </section>

          

    ";
        }
        // line 164
        echo " 
      

    ";
        // line 167
        if ( !(isset($context["is_front"]) ? $context["is_front"] : null)) {
            echo " 
      
          <section";
            // line 169
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
            echo " style=\"margin-top:107px;\">
              \t
                ";
            // line 172
            echo "                ";
            $this->displayBlock('content', $context, $blocks);
            // line 176
            echo "           </section>
    ";
        }
        // line 177
        echo " 

";
    }

    // line 103
    public function block_highlighted($context, array $blocks = array())
    {
        // line 104
        echo "                      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "
                    ";
    }

    // line 115
    public function block_highlighted_mobile($context, array $blocks = array())
    {
        // line 116
        echo "                      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted_mobile", array()), "html", null, true));
        echo "
                    ";
    }

    // line 131
    public function block_stories($context, array $blocks = array())
    {
        // line 132
        echo "                              ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "stories", array()), "html", null, true));
        echo "
                            ";
    }

    // line 152
    public function block_services($context, array $blocks = array())
    {
        // line 153
        echo "                              ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "services", array()), "html", null, true));
        echo "
                            ";
    }

    // line 172
    public function block_content($context, array $blocks = array())
    {
        // line 173
        echo "                  <a id=\"main-content\"></a>
                  ";
        // line 174
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
                ";
    }

    // line 182
    public function block_footer($context, array $blocks = array())
    {
        // line 183
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 184
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/nextgeneration/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 184,  327 => 183,  324 => 182,  318 => 174,  315 => 173,  312 => 172,  305 => 153,  302 => 152,  295 => 132,  292 => 131,  285 => 116,  282 => 115,  275 => 104,  272 => 103,  266 => 177,  262 => 176,  259 => 172,  254 => 169,  249 => 167,  244 => 164,  230 => 155,  227 => 152,  224 => 151,  204 => 134,  201 => 131,  199 => 130,  195 => 128,  185 => 119,  182 => 118,  179 => 115,  176 => 114,  168 => 107,  165 => 106,  162 => 103,  159 => 102,  153 => 98,  150 => 97,  147 => 96,  142 => 91,  138 => 89,  135 => 88,  129 => 85,  126 => 84,  123 => 83,  119 => 80,  110 => 74,  107 => 73,  104 => 72,  100 => 70,  97 => 69,  91 => 67,  89 => 66,  84 => 65,  82 => 62,  81 => 61,  80 => 59,  78 => 58,  75 => 57,  69 => 182,  67 => 181,  64 => 180,  62 => 96,  59 => 94,  55 => 57,  53 => 56,  51 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/nextgeneration/templates/page.html.twig", "D:\\xamp\\htdocs\\drupal-assignment\\themes\\nextgeneration\\templates\\page.html.twig");
    }
}
