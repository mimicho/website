<?php

/* themes/nextgeneration/templates/block/block--views-block--services-block-1.html.twig */
class __TwigTemplate_e4d76f9669abeb94f77af7258aa5e778354c216696c6031708a1469bdc7d5608 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 49, "if" => 58, "block" => 70);
        $filters = array("clean_class" => 51, "split" => 62);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 'split'),
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

        // line 49
        $context["classes"] = array(0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 51
(isset($context["configuration"]) ? $context["configuration"] : null), "provider", array()))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 52
(isset($context["plugin_id"]) ? $context["plugin_id"] : null))), 3 => "clearfix");
        // line 56
        echo "<section>
  ";
        // line 57
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 58
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 59
            echo "
         ";
            // line 61
            echo "
        ";
            // line 62
            $context["array"] = twig_split_filter($this->env, (isset($context["label"]) ? $context["label"] : null), " ", 2);
            // line 63
            echo "        <h2>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["array"]) ? $context["array"] : null), 0), "html", null, true));
            echo "<br/><!-- First word -->
        <span >";
            // line 64
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["array"]) ? $context["array"] : null), 1), "html", null, true));
            echo "</span></h2><!-- Rest of string -->


  ";
        }
        // line 68
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "

  ";
        // line 70
        $this->displayBlock('content', $context, $blocks);
        // line 73
        echo "</section>

";
    }

    // line 70
    public function block_content($context, array $blocks = array())
    {
        // line 71
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/nextgeneration/templates/block/block--views-block--services-block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 71,  91 => 70,  85 => 73,  83 => 70,  77 => 68,  70 => 64,  65 => 63,  63 => 62,  60 => 61,  57 => 59,  55 => 58,  51 => 57,  48 => 56,  46 => 52,  45 => 51,  44 => 49,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/nextgeneration/templates/block/block--views-block--services-block-1.html.twig", "D:\\xamp\\htdocs\\drupal-assignment\\themes\\nextgeneration\\templates\\block\\block--views-block--services-block-1.html.twig");
    }
}
