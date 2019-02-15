<?php

/* {# inline_template_start #}<div class="service-item">
    <div class="service-img-shell">{{ field_image }}</div>
    <div class="service-content-shell text-center">
        <h4>{{ title }}</h4>
      {{ field_intro_text }}
        <a class="button" href="{{ view_node }}"> Read More</a>

    </div>
</div> */
class __TwigTemplate_63afbdcdc86e2176399200f3fec1ce452a7a035f766cbd89f3567a967be0f667 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        // line 1
        echo "<div class=\"service-item\">
    <div class=\"service-img-shell\">";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_image"]) ? $context["field_image"] : null), "html", null, true));
        echo "</div>
    <div class=\"service-content-shell text-center\">
        <h4>";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</h4>
      ";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_intro_text"]) ? $context["field_intro_text"] : null), "html", null, true));
        echo "
        <a class=\"button\" href=\"";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["view_node"]) ? $context["view_node"] : null), "html", null, true));
        echo "\"> Read More</a>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"service-item\">
    <div class=\"service-img-shell\">{{ field_image }}</div>
    <div class=\"service-content-shell text-center\">
        <h4>{{ title }}</h4>
      {{ field_intro_text }}
        <a class=\"button\" href=\"{{ view_node }}\"> Read More</a>

    </div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 6,  63 => 5,  59 => 4,  54 => 2,  51 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"service-item\">
    <div class=\"service-img-shell\">{{ field_image }}</div>
    <div class=\"service-content-shell text-center\">
        <h4>{{ title }}</h4>
      {{ field_intro_text }}
        <a class=\"button\" href=\"{{ view_node }}\"> Read More</a>

    </div>
</div>", "");
    }
}
