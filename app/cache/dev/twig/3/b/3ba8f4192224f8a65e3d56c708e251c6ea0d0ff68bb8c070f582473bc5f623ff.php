<?php

/* MyBlogBundle:Default:index.html.twig */
class __TwigTemplate_64253e84754441aa7d26113ca24cb3bfe9dddb769b13099a0a3653c83248a687 extends Twig_Template
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
        $__internal_1efac1813882468293e71084cc052aca6180e623a1b3f1ec4a80fedf55ab2a08 = $this->env->getExtension("native_profiler");
        $__internal_1efac1813882468293e71084cc052aca6180e623a1b3f1ec4a80fedf55ab2a08->enter($__internal_1efac1813882468293e71084cc052aca6180e623a1b3f1ec4a80fedf55ab2a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyBlogBundle:Default:index.html.twig"));

        // line 1
        echo "<h1>Blog posts</h1>
<table>
    <tr>
        <td>Id</td>
        <td>Title</td>
        <td>CreatedAt</td>
        <td>Operation</td>
    </tr>
    ";
        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 11
            echo "    <tr>
        <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "</td>
        <td><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></td>
        <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "createdAt", array()), "Y/m/d H:i"), "html", null, true);
            echo "</td>
        <td><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">Edit</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_delete", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">Delete</a></td>
    </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 18
            echo "    <tr>
        <td colspan=\"4\">No posts found</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</table>

<div>
<a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("blog_new");
        echo "\">add post</a>
</div>";
        
        $__internal_1efac1813882468293e71084cc052aca6180e623a1b3f1ec4a80fedf55ab2a08->leave($__internal_1efac1813882468293e71084cc052aca6180e623a1b3f1ec4a80fedf55ab2a08_prof);

    }

    public function getTemplateName()
    {
        return "MyBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 25,  74 => 22,  65 => 18,  55 => 15,  51 => 14,  45 => 13,  41 => 12,  38 => 11,  32 => 10,  22 => 1,);
    }
}
/* <h1>Blog posts</h1>*/
/* <table>*/
/*     <tr>*/
/*         <td>Id</td>*/
/*         <td>Title</td>*/
/*         <td>CreatedAt</td>*/
/*         <td>Operation</td>*/
/*     </tr>*/
/*     {# ここから、posts配列をループして、投稿記事の情報を表示 #}*/
/*     {% for post in posts %}*/
/*     <tr>*/
/*         <td>{{ post.id }}</td>*/
/*         <td><a href="{{ path('blog_show', {'id':post.id}) }}">{{ post.title }}</a></td>*/
/*         <td>{{ post.createdAt|date('Y/m/d H:i') }}</td>*/
/*         <td><a href="{{ path('blog_edit', {'id':post.id}) }}">Edit</a> <a href="{{ path('blog_delete', {'id':post.id}) }}">Delete</a></td>*/
/*     </tr>*/
/*     {% else %}*/
/*     <tr>*/
/*         <td colspan="4">No posts found</td>*/
/*     </tr>*/
/*     {% endfor %}*/
/* </table>*/
/* */
/* <div>*/
/* <a href="{{ path('blog_new') }}">add post</a>*/
/* </div>*/
