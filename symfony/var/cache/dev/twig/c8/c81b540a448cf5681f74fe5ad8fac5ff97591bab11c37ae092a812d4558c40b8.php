<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0cc32778ab771e0ad782f3d68c7efecfb0486f299977e37b4278d24c28515ba9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76608bc6b53bf51bb065b3afcd3ec66bbc0c2796279f002ff8f3ebd71c2a0096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76608bc6b53bf51bb065b3afcd3ec66bbc0c2796279f002ff8f3ebd71c2a0096->enter($__internal_76608bc6b53bf51bb065b3afcd3ec66bbc0c2796279f002ff8f3ebd71c2a0096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76608bc6b53bf51bb065b3afcd3ec66bbc0c2796279f002ff8f3ebd71c2a0096->leave($__internal_76608bc6b53bf51bb065b3afcd3ec66bbc0c2796279f002ff8f3ebd71c2a0096_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_26c2ba6f953d49630ec556c29c26a6ab5715183c5444086417b221cce3030f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c2ba6f953d49630ec556c29c26a6ab5715183c5444086417b221cce3030f96->enter($__internal_26c2ba6f953d49630ec556c29c26a6ab5715183c5444086417b221cce3030f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_26c2ba6f953d49630ec556c29c26a6ab5715183c5444086417b221cce3030f96->leave($__internal_26c2ba6f953d49630ec556c29c26a6ab5715183c5444086417b221cce3030f96_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3f6b3e27ce8244f4496268d5764037ef0acb8a5c9a838db2bcb8e6ad052d9626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f6b3e27ce8244f4496268d5764037ef0acb8a5c9a838db2bcb8e6ad052d9626->enter($__internal_3f6b3e27ce8244f4496268d5764037ef0acb8a5c9a838db2bcb8e6ad052d9626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3f6b3e27ce8244f4496268d5764037ef0acb8a5c9a838db2bcb8e6ad052d9626->leave($__internal_3f6b3e27ce8244f4496268d5764037ef0acb8a5c9a838db2bcb8e6ad052d9626_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d8f77fbae1cf4e2309832e5241e5e50bee950197261c0c4ae06445ae186a73b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8f77fbae1cf4e2309832e5241e5e50bee950197261c0c4ae06445ae186a73b1->enter($__internal_d8f77fbae1cf4e2309832e5241e5e50bee950197261c0c4ae06445ae186a73b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d8f77fbae1cf4e2309832e5241e5e50bee950197261c0c4ae06445ae186a73b1->leave($__internal_d8f77fbae1cf4e2309832e5241e5e50bee950197261c0c4ae06445ae186a73b1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\RF17\\Documents\\NetBeansProjects\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
