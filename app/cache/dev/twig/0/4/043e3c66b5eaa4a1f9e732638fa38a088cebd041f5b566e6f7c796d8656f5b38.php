<?php

/* MyBlogBundle:Default:edit.html.twig */
class __TwigTemplate_9f3449cf24d704c38228039ce60ea0bc958360c85fff72c0baa4bc79f549e503 extends Twig_Template
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
        $__internal_6e822b4586b5642d4fabf342ee203370880c577a570a2e4a339ab932ae858a47 = $this->env->getExtension("native_profiler");
        $__internal_6e822b4586b5642d4fabf342ee203370880c577a570a2e4a339ab932ae858a47->enter($__internal_6e822b4586b5642d4fabf342ee203370880c577a570a2e4a339ab932ae858a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyBlogBundle:Default:edit.html.twig"));

        // line 1
        echo "<h1>Edit Post</h1>
<form action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_edit", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" value=\"Save Post\" />
</form>";
        
        $__internal_6e822b4586b5642d4fabf342ee203370880c577a570a2e4a339ab932ae858a47->leave($__internal_6e822b4586b5642d4fabf342ee203370880c577a570a2e4a339ab932ae858a47_prof);

    }

    public function getTemplateName()
    {
        return "MyBlogBundle:Default:edit.html.twig";
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
/* <h1>Edit Post</h1>*/
/* <form action="{{ path('blog_edit', {'id':post.id}) }}" method="post" {{ form_enctype(form) }} novalidate>*/
/*     {{ form_widget(form) }}*/
/*     <input type="submit" value="Save Post" />*/
/* </form>*/
