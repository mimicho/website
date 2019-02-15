<?php

/* themes/nextgeneration/templates/views/views-view-unformatted--featured-content.html.twig */
class __TwigTemplate_ed3e272a9e4b587ab54f6fd5993c69477385822e12a244f5d1748950b6e83cc8 extends Twig_Template
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
        $tags = array("if" => 20, "for" => 35, "set" => 56);
        $filters = array("split" => 62);
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
        // line 26
        echo "


\t\t<div class=\"carousel fade-carousel slide\" data-ride=\"carousel\" data-interval=\"4000\" id=\"bs-carousel\">
\t\t\t\t  <!-- Overlay -->
\t\t\t\t ";
        // line 32
        echo "
\t\t\t\t  <!-- Indicators -->
\t\t\t\t  <ol class=\"carousel-indicators\">
\t\t\t\t  \t  ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            echo " 
\t\t\t\t  \t  \t";
            // line 36
            if (($context["key"] == 0)) {
                // line 37
                echo "
\t\t\t\t  \t  \t<li data-target=\"#bs-carousel\" data-slide-to=\"";
                // line 38
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["key"], "html", null, true));
                echo "\" class=\"active\"></li>

\t\t\t\t  \t  ";
            } else {
                // line 41
                echo "
\t\t\t\t  \t  \t<li data-target=\"#bs-carousel\" data-slide-to=\"";
                // line 42
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["key"], "html", null, true));
                echo "\" ></li>
\t\t\t\t  \t  ";
            }
            // line 44
            echo "\t\t\t\t  \t  
\t\t\t\t  \t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
\t\t\t\t    
\t\t\t\t   
\t\t\t\t  </ol>
\t\t\t\t  
\t\t\t\t  <!-- Wrapper for slides -->
\t\t\t\t  <div class=\"carousel-inner\">
\t\t\t\t\t\t   
\t\t  \t\t\t";
        // line 54
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
            // line 55
            echo "
\t\t  \t\t\t\t";
            // line 56
            $context["imgurl"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rowr"], "content", array()), "#view", array(), "array"), "style_plugin", array()), "render_tokens", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "{{ field_image }}", array(), "array");
            // line 57
            echo "
\t\t  \t\t\t\t

\t\t  \t\t\t\t";
            // line 60
            $context["feature_title"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rowr"], "content", array()), "#view", array(), "array"), "style_plugin", array()), "render_tokens", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "{{ title }}", array(), "array");
            echo "\t

\t\t  \t\t\t\t";
            // line 62
            $context["numberOfWords"] = twig_split_filter($this->env, (isset($context["feature_title"]) ? $context["feature_title"] : null), "-");
            // line 63
            echo "
\t\t  \t\t\t\t";
            // line 64
            $context["feature_body"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rowr"], "content", array()), "#view", array(), "array"), "style_plugin", array()), "render_tokens", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "{{ body }}", array(), "array");
            // line 65
            echo "
\t\t  \t\t\t\t";
            // line 66
            $context["featuredlink"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rowr"], "content", array()), "#view", array(), "array"), "style_plugin", array()), "render_tokens", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "{{ field_external_link }}", array(), "array");
            // line 67
            echo "
\t\t\t\t  \t  \t";
            // line 68
            if (($context["keyr"] == 0)) {
                // line 69
                echo "
\t\t\t\t  \t  \t \t<div class=\"item slides active\">
\t\t\t\t\t\t      \t

\t\t\t\t  


\t\t\t\t\t\t\t<div class=\"background-image\" style=\"background-image: url(";
                // line 76
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["imgurl"]) ? $context["imgurl"] : null), "html", null, true));
                echo ");height: 724px;
    background-size: cover;
    background-repeat: no-repeat;background-position: center center;\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slider-container\">
\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"gradient\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"barslider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"slide-text\">
\t\t\t\t\t\t\t\t\t\t\t\t          <h2>

\t\t\t\t\t\t\t\t\t\t\t\t          \t";
                // line 86
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["numberOfWords"]) ? $context["numberOfWords"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["word"]) {
                    // line 87
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t        ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["word"], "html", null, true));
                    echo "<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['word'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "

\t\t\t\t\t\t\t\t\t\t\t\t          </h2>
\t\t\t\t\t\t\t\t\t\t\t\t          <h3>";
                // line 92
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["feature_body"]) ? $context["feature_body"] : null), "html", null, true));
                echo "</h3> 
\t\t\t\t\t\t\t\t\t\t\t\t          <a href='";
                // line 93
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["featuredlink"]) ? $context["featuredlink"] : null), "html", null, true));
                echo "' target=\"_blank\" class=\"button\"> Read More</a> 
\t\t\t\t\t\t\t\t\t\t\t\t         
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t    \t</div>

\t\t\t\t\t\t  \t  \t";
            } else {
                // line 105
                echo "
\t\t\t\t\t\t  \t  \t\t<div class=\"item slides\">
\t\t\t\t\t\t
   \t

\t\t\t\t\t\t\t\t<div class=\"background-image\" style=\"background-image: url(";
                // line 110
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["imgurl"]) ? $context["imgurl"] : null), "html", null, true));
                echo ");height: 724px;
    background-size: cover;
    background-repeat: no-repeat;background-position: center center;\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slider-container\">
\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"gradient\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"barslider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"slide-text\">
\t\t\t\t\t\t\t\t\t\t\t\t          <h2>
\t\t\t\t\t\t\t\t\t\t\t\t          \t\t";
                // line 119
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["numberOfWords"]) ? $context["numberOfWords"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["word"]) {
                    // line 120
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["word"], "html", null, true));
                    echo "<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['word'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 122
                echo "\t\t\t\t\t\t\t\t\t\t\t\t          </h2>
\t\t\t\t\t\t\t\t\t\t\t\t          <h3>";
                // line 123
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["feature_body"]) ? $context["feature_body"] : null), "html", null, true));
                echo "</h3> 
\t\t\t\t\t\t\t\t\t\t\t\t          <a href='";
                // line 124
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["featuredlink"]) ? $context["featuredlink"] : null), "html", null, true));
                echo "' target=\"_blank\" class=\"button\"> Read More</a> 
\t\t\t\t\t\t\t\t\t\t\t\t          
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t  \t  \t
\t\t\t\t\t\t  \t  \t";
            }
            // line 135
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
        // line 137
        echo "

\t\t\t\t\t\t   
\t\t\t\t\t\t    
\t\t\t\t\t</div> 
\t\t</div>
  

";
    }

    public function getTemplateName()
    {
        return "themes/nextgeneration/templates/views/views-view-unformatted--featured-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 137,  269 => 135,  255 => 124,  251 => 123,  248 => 122,  239 => 120,  235 => 119,  223 => 110,  216 => 105,  201 => 93,  197 => 92,  192 => 89,  183 => 87,  179 => 86,  166 => 76,  157 => 69,  155 => 68,  152 => 67,  150 => 66,  147 => 65,  145 => 64,  142 => 63,  140 => 62,  135 => 60,  130 => 57,  128 => 56,  125 => 55,  108 => 54,  98 => 46,  91 => 44,  86 => 42,  83 => 41,  77 => 38,  74 => 37,  72 => 36,  66 => 35,  61 => 32,  54 => 26,  45 => 21,  43 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/nextgeneration/templates/views/views-view-unformatted--featured-content.html.twig", "D:\\xamp\\htdocs\\drupal-assignment\\themes\\nextgeneration\\templates\\views\\views-view-unformatted--featured-content.html.twig");
    }
}
