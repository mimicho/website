<?php

/* themes/nextgeneration/templates/node--services--full.html.twig */
class __TwigTemplate_708893fe3ac1a22e1a1378c18d6651457ac45bd8c9a64377b0f33a7acbab51c0 extends Twig_Template
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
        $tags = array("set" => 69, "if" => 80, "trans" => 84);
        $filters = array("clean_class" => 70, "split" => 99, "without" => 125);
        $functions = array("file_url" => 93);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'trans'),
                array('clean_class', 'split', 'without'),
                array('file_url')
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

        // line 69
        $context["classes"] = array(0 => \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 70
(isset($context["node"]) ? $context["node"] : null), "bundle", array())), 1 => (($this->getAttribute(        // line 71
(isset($context["node"]) ? $context["node"] : null), "isPromoted", array(), "method")) ? ("is-promoted") : ("")), 2 => (($this->getAttribute(        // line 72
(isset($context["node"]) ? $context["node"] : null), "isSticky", array(), "method")) ? ("is-sticky") : ("")), 3 => (( !$this->getAttribute(        // line 73
(isset($context["node"]) ? $context["node"] : null), "isPublished", array(), "method")) ? ("is-unpublished") : ("")), 4 => ((        // line 74
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (\Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null))) : ("")), 5 => "clearfix");
        // line 78
        echo "<article";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo " >

  ";
        // line 80
        if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
            // line 81
            echo "    <footer>
      ";
            // line 82
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["author_picture"]) ? $context["author_picture"] : null), "html", null, true));
            echo "
      <div";
            // line 83
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["author_attributes"]) ? $context["author_attributes"] : null), "addClass", array(0 => "author"), "method"), "html", null, true));
            echo ">
        ";
            // line 84
            echo t("Submitted by @author_name on @date", array("@author_name" => (isset($context["author_name"]) ? $context["author_name"] : null), "@date" => (isset($context["date"]) ? $context["date"] : null), ));
            // line 85
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["metadata"]) ? $context["metadata"] : null), "html", null, true));
            echo "
      </div>
    </footer>
  ";
        }
        // line 89
        echo "

  ";
        // line 92
        echo "
  ";
        // line 93
        $context["media_img_url"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_masthead", array()), 0, array()), "#item", array(), "array"), "entity", array()), "uri", array()), "value", array())));
        // line 94
        echo "  <section class=\"banner\" style=\"background-image: url('";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["media_img_url"]) ? $context["media_img_url"] : null), "html", null, true));
        echo "');\">
        <div class=\"barslider\"></div>
        <div class=\"wrapper\">
          <div class=\"gradient\">
            
              ";
        // line 99
        $context["storytitle"] = twig_split_filter($this->env, $this->getAttribute((isset($context["node"]) ? $context["node"] : null), "label", array()), " ", 2);
        // line 100
        echo "              <h1>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["storytitle"]) ? $context["storytitle"] : null), 0), "html", null, true));
        echo "<br/><!-- First word -->
              <span >";
        // line 101
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["storytitle"]) ? $context["storytitle"] : null), 1), "html", null, true));
        echo "</span></h1><!-- Rest of string -->

          </div>
        </div>
        
  </section>



  <div";
        // line 110
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "content"), "method"), "html", null, true));
        echo ">
   
    <section class=\"intro\">
        <div class=\"container \">
        
          <div class=\"intro-text-shell\">
            ";
        // line 116
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_intro_text", array()), "html", null, true));
        echo "
          </div>
          

        </div>
    </section>
    
    <section class=\"subpage-body-text\">
        <div class=\"container\">
              ";
        // line 125
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "field_masthead", "field_intro_text"), "html", null, true));
        echo "
        </div>
    </section>
    
  </div>

</article>



";
    }

    public function getTemplateName()
    {
        return "themes/nextgeneration/templates/node--services--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 125,  125 => 116,  116 => 110,  104 => 101,  99 => 100,  97 => 99,  88 => 94,  86 => 93,  83 => 92,  79 => 89,  71 => 85,  69 => 84,  65 => 83,  61 => 82,  58 => 81,  56 => 80,  50 => 78,  48 => 74,  47 => 73,  46 => 72,  45 => 71,  44 => 70,  43 => 69,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/nextgeneration/templates/node--services--full.html.twig", "D:\\xamp\\htdocs\\drupal-assignment\\themes\\nextgeneration\\templates\\node--services--full.html.twig");
    }
}
