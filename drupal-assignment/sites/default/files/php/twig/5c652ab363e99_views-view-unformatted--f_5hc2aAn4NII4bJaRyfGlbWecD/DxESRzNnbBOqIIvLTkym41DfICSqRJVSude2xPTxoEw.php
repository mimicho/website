<?php

/* themes/nextgeneration/templates/views/views-view-unformatted--featured-content-mobile.html.twig */
class __TwigTemplate_eb3b96af1de6ada5d48a0aa0f0e44b35925207d2c14996d23dbb1202b9c29557 extends Twig_Template
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
        $tags = array("if" => 20, "for" => 32, "set" => 53);
        $filters = array("split" => 59);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array('split'),
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

        // line 20
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 21
            echo "  <h3>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h3>
";
        }
        // line 23
        echo "


\t\t<div class=\"carousel fade-carousel slide\" data-ride=\"carousel\" data-interval=\"4000\" id=\"bm-carousel\">
\t\t\t\t  <!-- Overlay -->
\t\t\t\t ";
        // line 29
        echo "
\t\t\t\t  <!-- Indicators -->
\t\t\t\t  <ol class=\"carousel-indicators\">
\t\t\t\t  \t  ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            echo " 
\t\t\t\t  \t  \t";
            // line 33
            if (($context["key"] == 0)) {
                // line 34
                echo "
\t\t\t\t  \t  \t<li data-target=\"#bm-carousel\" data-slide-to=\"";
                // line 35
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["key"], "html", null, true));
                echo "\" class=\"active\"></li>

\t\t\t\t  \t  ";
            } else {
                // line 38
                echo "
\t\t\t\t  \t  \t<li data-target=\"#bm-carousel\" data-slide-to=\"";
                // line 39
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["key"], "html", null, true));
                echo "\" ></li>
\t\t\t\t  \t  ";
            }
            // line 41
            echo "\t\t\t\t  \t  
\t\t\t\t  \t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
\t\t\t\t    
\t\t\t\t   
\t\t\t\t  </ol>
\t\t\t\t  
\t\t\t\t  <!-- Wrapper for slides -->
\t\t\t\t  <div class=\"carousel-inner\"  role=\"listbox\">
\t\t\t\t\t\t   
\t\t  \t\t\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
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
        foreach ($context['_seq'] as $context["keyr"] => $context["rowr"]) {
            // line 52
            echo "
\t\t  \t\t\t\t";
            // line 53
            $context["imgurl"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rowr"], "content", array()), "#view", array(), "array"), "style_plugin", array()), "render_tokens", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "{{ field_image }}", array(), "array");
            // line 54
            echo "
\t\t  \t\t\t\t

\t\t  \t\t\t\t";
            // line 57
            $context["feature_title"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rowr"], "content", array()), "#view", array(), "array"), "style_plugin", array()), "render_tokens", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "{{ title }}", array(), "array");
            // line 58
            echo "
\t\t  \t\t\t\t";
            // line 59
            $context["numberOfWords"] = twig_split_filter($this->env, (isset($context["feature_title"]) ? $context["feature_title"] : null), "-");
            echo "\t

\t\t  \t\t\t\t";
            // line 61
            $context["feature_body"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rowr"], "content", array()), "#view", array(), "array"), "style_plugin", array()), "render_tokens", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "{{ body }}", array(), "array");
            // line 62
            echo "
\t\t  \t\t\t\t";
            // line 63
            $context["featuredlink"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rowr"], "content", array()), "#view", array(), "array"), "style_plugin", array()), "render_tokens", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "{{ field_external_link }}", array(), "array");
            // line 64
            echo "
\t\t\t\t  \t  \t";
            // line 65
            if (($context["keyr"] == 0)) {
                // line 66
                echo "
\t\t\t\t  \t  \t \t<div class=\"item slides active\">
\t\t\t\t\t\t      \t

\t\t\t\t  \t\t\t\t\t<div class=\"slider-container \">
\t
\t\t   \t\t\t\t\t\t\t\t\t<div class=\"featuredimage \"><img src=\"";
                // line 72
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["imgurl"]) ? $context["imgurl"] : null), "html", null, true));
                echo "\" > </div>\t\t\t\t\t\t\t\t\t\t<div class=\"gradient \"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"slide-text\">
\t\t\t\t\t\t\t\t\t              <h2>
\t\t\t\t\t\t\t\t\t              \t\t";
                // line 75
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["numberOfWords"]) ? $context["numberOfWords"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["word"]) {
                    // line 76
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t        ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["word"], "html", null, true));
                    echo "<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['word'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "
\t\t\t\t\t\t\t\t\t              </h2>
\t\t\t\t\t\t\t\t\t              <h3>";
                // line 80
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["feature_body"]) ? $context["feature_body"] : null), "html", null, true));
                echo "</h3> 
\t\t\t\t\t\t\t\t\t\t\t\t  <a href=\"";
                // line 81
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["featuredlink"]) ? $context["featuredlink"] : null), "html", null, true));
                echo "\" target=\"_blank\" class=\"button\"> Read More</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t


\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t  \t  \t";
            } else {
                // line 93
                echo "
\t\t\t\t\t\t  \t  \t\t<div class=\"item slides\">
\t\t\t\t\t\t
   \t\t\t\t\t\t\t\t\t\t\t<div class=\"slider-container \">
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t   \t\t\t\t\t\t\t\t\t\t\t";
                // line 99
                echo "\t\t   \t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t   \t\t\t\t\t\t\t\t\t\t\t<div class=\"featuredimage \"><img src=\"";
                // line 100
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["imgurl"]) ? $context["imgurl"] : null), "html", null, true));
                echo "\" > </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"gradient \"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slide-text\">
\t\t\t\t\t\t\t\t\t\t\t              <h2>
\t\t\t\t\t\t\t\t\t\t\t              \t";
                // line 104
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["numberOfWords"]) ? $context["numberOfWords"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["word"]) {
                    // line 105
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t        ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["word"], "html", null, true));
                    echo "<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['word'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "
\t\t\t\t\t\t\t\t\t\t\t              </h2>
\t\t\t\t\t\t\t\t\t\t\t              <h3>";
                // line 109
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["feature_body"]) ? $context["feature_body"] : null), "html", null, true));
                echo "</h3> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <a href=\"";
                // line 110
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["featuredlink"]) ? $context["featuredlink"] : null), "html", null, true));
                echo "\" target=\"_blank\" class=\"button\"> Read More</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t  \t  \t
\t\t\t\t\t\t  \t  \t";
            }
            // line 119
            echo "\t\t\t\t\t\t  \t  
\t\t\t\t\t\t  \t  ";
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
        unset($context['_seq'], $context['_iterated'], $context['keyr'], $context['rowr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "

\t\t\t\t\t\t   
\t\t\t\t\t\t    
\t\t\t\t\t</div> 
\t\t</div>
  

";
    }

    public function getTemplateName()
    {
        return "themes/nextgeneration/templates/views/views-view-unformatted--featured-content-mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 121,  254 => 119,  242 => 110,  238 => 109,  234 => 107,  225 => 105,  221 => 104,  214 => 100,  211 => 99,  204 => 93,  189 => 81,  185 => 80,  181 => 78,  172 => 76,  168 => 75,  162 => 72,  154 => 66,  152 => 65,  149 => 64,  147 => 63,  144 => 62,  142 => 61,  137 => 59,  134 => 58,  132 => 57,  127 => 54,  125 => 53,  122 => 52,  105 => 51,  95 => 43,  88 => 41,  83 => 39,  80 => 38,  74 => 35,  71 => 34,  69 => 33,  63 => 32,  58 => 29,  51 => 23,  45 => 21,  43 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/nextgeneration/templates/views/views-view-unformatted--featured-content-mobile.html.twig", "D:\\xamp\\htdocs\\drupal-assignment\\themes\\nextgeneration\\templates\\views\\views-view-unformatted--featured-content-mobile.html.twig");
    }
}
