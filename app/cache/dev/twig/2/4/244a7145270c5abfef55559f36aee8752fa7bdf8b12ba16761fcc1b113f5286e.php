<?php

/* MyBlogBundle:Default:new.html.twig */
class __TwigTemplate_7b0d7f3957a1402f9ce59490093aadbf688dc88518a4d709ae0ccbe3e69b25ba extends Twig_Template
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
        $__internal_19513796a2075b326ae699c703c83872fa6a90195d4cf1f97121ca637c95ddd7 = $this->env->getExtension("native_profiler");
        $__internal_19513796a2075b326ae699c703c83872fa6a90195d4cf1f97121ca637c95ddd7->enter($__internal_19513796a2075b326ae699c703c83872fa6a90195d4cf1f97121ca637c95ddd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyBlogBundle:Default:new.html.twig"));

        // line 1
        echo "<h1>Add Post</h1>
<form action=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("blog_new");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" value=\"Save Post\" />
</form>";
        
        $__internal_19513796a2075b326ae699c703c83872fa6a90195d4cf1f97121ca637c95ddd7->leave($__internal_19513796a2075b326ae699c703c83872fa6a90195d4cf1f97121ca637c95ddd7_prof);

    }

    public function getTemplateName()
    {
        return "MyBlogBundle:Default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 2,  22 => 1,);
    }
}
/* <h1>Add Post</h1>*/
/* <form action="{{ path('blog_new') }}" method="post" {{ form_enctype(form) }} novalidate>*/
/*     {{ form_widget(form) }}*/
/*     <input type="submit" value="Save Post" />*/
/* </form>*/
