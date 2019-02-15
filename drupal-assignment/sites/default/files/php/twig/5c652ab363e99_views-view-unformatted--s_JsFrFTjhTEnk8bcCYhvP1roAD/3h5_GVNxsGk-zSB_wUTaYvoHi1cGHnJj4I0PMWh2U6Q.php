<?php

/* themes/nextgeneration/templates/views/views-view-unformatted--services.html.twig */
class __TwigTemplate_6a5efcb078fe8c71a6781616ccbabc1ea4b87a192d314c8b3d97d36de3c52f35 extends Twig_Template
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
        $tags = array("if" => 20, "for" => 33);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
                array(),
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
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "
";
        }
        // line 23
        echo "      

 
  
\t
<div id=\"mixedSlider\">
                <div class=\"MS-content\">

                \t\t
                           
                \t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 34
            echo "\t\t\t\t\t        
\t\t\t\t\t    \t<div class=\"item\"> 

\t\t\t\t\t    \t\t\t";
            // line 37
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo "
\t\t\t\t\t\t        
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t       
\t\t\t\t\t   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo " 

                       
                        

                </div>

                <div class=\"MS-controls\">
                        <button class=\"MS-left\">
                            ";
        // line 51
        echo "                            <img src=\"themes/nextgeneration/images/prev-promo@2x.png\" width=\"27\" alt=\"Prev\" aria-hidden=\"true\"></a>
                          </button>

                        <button class=\"MS-right\">
                            ";
        // line 56
        echo "                            <img src=\"themes/nextgeneration/images/next-promo@2x.png\" width=\"27\" alt=\"Next\" aria-hidden=\"true\">
                          </button>
                    </div>
</div>
<script src=\"https://code.jquery.com/jquery-1.12.4.min.js\"></script> 
<script src=\"themes/nextgeneration/js/multislider.js\"></script> 

<script type=\"text/javascript\">
 \$('#mixedSlider').multislider({
      duration: 750,
      interval: 3000
    });

</script>";
    }

    public function getTemplateName()
    {
        return "themes/nextgeneration/templates/views/views-view-unformatted--services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 56,  94 => 51,  83 => 41,  72 => 37,  67 => 34,  63 => 33,  51 => 23,  45 => 21,  43 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/nextgeneration/templates/views/views-view-unformatted--services.html.twig", "D:\\xamp\\htdocs\\drupal-assignment\\themes\\nextgeneration\\templates\\views\\views-view-unformatted--services.html.twig");
    }
}
