<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_84feb303e21b18b9a6a26e542beda3844ef90bf3ece08446de5faa762fa9011c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4418937200f89b5d40a6fc17c414c21f4aaa0865df8bac0cf8c5286c2f54820 = $this->env->getExtension("native_profiler");
        $__internal_e4418937200f89b5d40a6fc17c414c21f4aaa0865df8bac0cf8c5286c2f54820->enter($__internal_e4418937200f89b5d40a6fc17c414c21f4aaa0865df8bac0cf8c5286c2f54820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4418937200f89b5d40a6fc17c414c21f4aaa0865df8bac0cf8c5286c2f54820->leave($__internal_e4418937200f89b5d40a6fc17c414c21f4aaa0865df8bac0cf8c5286c2f54820_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0086ba170e936a82097f37f3312349448ebc348065971dd0a5d86bf00f1cc39c = $this->env->getExtension("native_profiler");
        $__internal_0086ba170e936a82097f37f3312349448ebc348065971dd0a5d86bf00f1cc39c->enter($__internal_0086ba170e936a82097f37f3312349448ebc348065971dd0a5d86bf00f1cc39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0086ba170e936a82097f37f3312349448ebc348065971dd0a5d86bf00f1cc39c->leave($__internal_0086ba170e936a82097f37f3312349448ebc348065971dd0a5d86bf00f1cc39c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f686fa0e23bc095476eaa922220593684f7eb27c9fdc261d45a1350a51d290a = $this->env->getExtension("native_profiler");
        $__internal_3f686fa0e23bc095476eaa922220593684f7eb27c9fdc261d45a1350a51d290a->enter($__internal_3f686fa0e23bc095476eaa922220593684f7eb27c9fdc261d45a1350a51d290a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3f686fa0e23bc095476eaa922220593684f7eb27c9fdc261d45a1350a51d290a->leave($__internal_3f686fa0e23bc095476eaa922220593684f7eb27c9fdc261d45a1350a51d290a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_183e2719af07143137fc24a4a68c2306a0a3e72b4d6e1b92876b307a957d114e = $this->env->getExtension("native_profiler");
        $__internal_183e2719af07143137fc24a4a68c2306a0a3e72b4d6e1b92876b307a957d114e->enter($__internal_183e2719af07143137fc24a4a68c2306a0a3e72b4d6e1b92876b307a957d114e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_183e2719af07143137fc24a4a68c2306a0a3e72b4d6e1b92876b307a957d114e->leave($__internal_183e2719af07143137fc24a4a68c2306a0a3e72b4d6e1b92876b307a957d114e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
