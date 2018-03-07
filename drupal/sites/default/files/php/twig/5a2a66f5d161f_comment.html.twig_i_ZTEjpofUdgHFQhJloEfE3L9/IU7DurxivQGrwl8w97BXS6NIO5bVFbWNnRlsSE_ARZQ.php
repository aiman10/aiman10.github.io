<?php

/* core/themes/classy/templates/content/comment.html.twig */
class __TwigTemplate_d6acc5038c593c074ee7febebda0777fe77cc0060cdc7da8d06243e894a73415 extends Twig_Template
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
        $tags = array("if" => 67, "set" => 71);
        $filters = array();
        $functions = array("attach_library" => 68);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
                array(),
                array('attach_library')
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

        // line 67
        if ((isset($context["threaded"]) ? $context["threaded"] : null)) {
            // line 68
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("classy/indented"), "html", null, true));
            echo "
";
        }
        // line 71
        $context["classes"] = array(0 => "comment", 1 => "js-comment", 2 => (((        // line 74
(isset($context["status"]) ? $context["status"] : null) != "published")) ? ((isset($context["status"]) ? $context["status"] : null)) : ("")), 3 => (($this->getAttribute($this->getAttribute(        // line 75
(isset($context["comment"]) ? $context["comment"] : null), "owner", array()), "anonymous", array())) ? ("by-anonymous") : ("")), 4 => (((        // line 76
(isset($context["author_id"]) ? $context["author_id"] : null) && ((isset($context["author_id"]) ? $context["author_id"] : null) == $this->getAttribute((isset($context["commented_entity"]) ? $context["commented_entity"] : null), "getOwnerId", array(), "method")))) ? ((("by-" . $this->getAttribute((isset($context["commented_entity"]) ? $context["commented_entity"] : null), "getEntityTypeId", array(), "method")) . "-author")) : ("")));
        // line 79
        echo "<article";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 85
        echo "  <mark class=\"hidden\" data-comment-timestamp=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["new_indicator_timestamp"]) ? $context["new_indicator_timestamp"] : null), "html", null, true));
        echo "\"></mark>

  <footer class=\"comment__meta\">
    ";
        // line 88
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["user_picture"]) ? $context["user_picture"] : null), "html", null, true));
        echo "
    <p class=\"comment__submitted\">";
        // line 89
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["submitted"]) ? $context["submitted"] : null), "html", null, true));
        echo "</p>

    ";
        // line 96
        echo "    ";
        if ((isset($context["parent"]) ? $context["parent"] : null)) {
            // line 97
            echo "      <p class=\"parent visually-hidden\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["parent"]) ? $context["parent"] : null), "html", null, true));
            echo "</p>
    ";
        }
        // line 99
        echo "
    ";
        // line 100
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["permalink"]) ? $context["permalink"] : null), "html", null, true));
        echo "
  </footer>

  <div";
        // line 103
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "content"), "method"), "html", null, true));
        echo ">
    ";
        // line 104
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 105
            echo "      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
      <h3";
            // line 106
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h3>
      ";
            // line 107
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "
    ";
        }
        // line 109
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 109,  112 => 107,  106 => 106,  101 => 105,  99 => 104,  95 => 103,  89 => 100,  86 => 99,  80 => 97,  77 => 96,  72 => 89,  68 => 88,  61 => 85,  56 => 79,  54 => 76,  53 => 75,  52 => 74,  51 => 71,  45 => 68,  43 => 67,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/classy/templates/content/comment.html.twig", "C:\\wamp64\\www\\drupal\\core\\themes\\classy\\templates\\content\\comment.html.twig");
    }
}
