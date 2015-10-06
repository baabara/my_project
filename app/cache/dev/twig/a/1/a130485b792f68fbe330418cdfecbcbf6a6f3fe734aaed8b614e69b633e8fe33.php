<?php

/* MyBlogBundle:Default:show.html.twig */
class __TwigTemplate_f628c8a7d3b6e72e0a047f56811b35217b91c76f09a7f8d01789a20e1c06a5cd extends Twig_Template
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
        $__internal_6c97b84c3bea5c48412eb56108f5227045c77294e3d853eb142bbfed978c1697 = $this->env->getExtension("native_profiler");
        $__internal_6c97b84c3bea5c48412eb56108f5227045c77294e3d853eb142bbfed978c1697->enter($__internal_6c97b84c3bea5c48412eb56108f5227045c77294e3d853eb142bbfed978c1697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyBlogBundle:Default:show.html.twig"));

        // line 1
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</h1>
<p><small>Created: ";
        // line 2
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "createdAt", array()), "Y/m/d H:i"), "html", null, true);
        echo "</small></p>
<p>";
        // line 3
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "body", array()), "html", null, true));
        echo "</p>";
        
        $__internal_6c97b84c3bea5c48412eb56108f5227045c77294e3d853eb142bbfed978c1697->leave($__internal_6c97b84c3bea5c48412eb56108f5227045c77294e3d853eb142bbfed978c1697_prof);

    }

    public function getTemplateName()
    {
        return "MyBlogBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  27 => 2,  22 => 1,);
    }
}
/* <h1>{{ post.title }}</h1>*/
/* <p><small>Created: {{ post.createdAt|date('Y/m/d H:i') }}</small></p>*/
/* <p>{{ post.body|nl2br }}</p>*/
