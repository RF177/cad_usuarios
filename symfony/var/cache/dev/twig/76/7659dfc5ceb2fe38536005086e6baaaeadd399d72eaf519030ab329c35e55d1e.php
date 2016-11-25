<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_29c550ec08f9e052da3dedcdd581a647b6eb3026f14c38278ee28cf16482f6f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12b9a76c5d568e4c53f9c7e63e4fe1c15062b876ee8ccf7cd3c94cb83d7afac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b9a76c5d568e4c53f9c7e63e4fe1c15062b876ee8ccf7cd3c94cb83d7afac2->enter($__internal_12b9a76c5d568e4c53f9c7e63e4fe1c15062b876ee8ccf7cd3c94cb83d7afac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12b9a76c5d568e4c53f9c7e63e4fe1c15062b876ee8ccf7cd3c94cb83d7afac2->leave($__internal_12b9a76c5d568e4c53f9c7e63e4fe1c15062b876ee8ccf7cd3c94cb83d7afac2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_53dff96c83f7f063ef6ed8fec337e2281fdc23c8558d3992083ae6c7bd98d30d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53dff96c83f7f063ef6ed8fec337e2281fdc23c8558d3992083ae6c7bd98d30d->enter($__internal_53dff96c83f7f063ef6ed8fec337e2281fdc23c8558d3992083ae6c7bd98d30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_53dff96c83f7f063ef6ed8fec337e2281fdc23c8558d3992083ae6c7bd98d30d->leave($__internal_53dff96c83f7f063ef6ed8fec337e2281fdc23c8558d3992083ae6c7bd98d30d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_73ec827dd3862b53cfc6ffcb97b0d6c28f4bac10e6331680217ffae3b5a40c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ec827dd3862b53cfc6ffcb97b0d6c28f4bac10e6331680217ffae3b5a40c65->enter($__internal_73ec827dd3862b53cfc6ffcb97b0d6c28f4bac10e6331680217ffae3b5a40c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_73ec827dd3862b53cfc6ffcb97b0d6c28f4bac10e6331680217ffae3b5a40c65->leave($__internal_73ec827dd3862b53cfc6ffcb97b0d6c28f4bac10e6331680217ffae3b5a40c65_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0eea8d0a600bc8c483960fc1d89cd997dbb5318845f5e4b78822dbee4798d163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eea8d0a600bc8c483960fc1d89cd997dbb5318845f5e4b78822dbee4798d163->enter($__internal_0eea8d0a600bc8c483960fc1d89cd997dbb5318845f5e4b78822dbee4798d163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0eea8d0a600bc8c483960fc1d89cd997dbb5318845f5e4b78822dbee4798d163->leave($__internal_0eea8d0a600bc8c483960fc1d89cd997dbb5318845f5e4b78822dbee4798d163_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\RF17\\Documents\\NetBeansProjects\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
