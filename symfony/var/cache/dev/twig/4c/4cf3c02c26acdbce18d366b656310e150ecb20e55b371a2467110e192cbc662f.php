<?php

/* base.html.twig */
class __TwigTemplate_56dd6ca1da35797460e598ab4b77504f185fcb14f3a6298ce427958023acf1ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_723ece3377b470120411512a7df3fce50b1d234f4d68af8768d00a2183b57d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_723ece3377b470120411512a7df3fce50b1d234f4d68af8768d00a2183b57d38->enter($__internal_723ece3377b470120411512a7df3fce50b1d234f4d68af8768d00a2183b57d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_723ece3377b470120411512a7df3fce50b1d234f4d68af8768d00a2183b57d38->leave($__internal_723ece3377b470120411512a7df3fce50b1d234f4d68af8768d00a2183b57d38_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b04a13d1c23aeca134ecb650cd468fbdb57953f7576741b7f94d360adcbf9db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b04a13d1c23aeca134ecb650cd468fbdb57953f7576741b7f94d360adcbf9db8->enter($__internal_b04a13d1c23aeca134ecb650cd468fbdb57953f7576741b7f94d360adcbf9db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_b04a13d1c23aeca134ecb650cd468fbdb57953f7576741b7f94d360adcbf9db8->leave($__internal_b04a13d1c23aeca134ecb650cd468fbdb57953f7576741b7f94d360adcbf9db8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_40fba7d8c03934aa88a7af59a7ac43b52a9cd5b98aa56bdb3180b6e74061fc76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40fba7d8c03934aa88a7af59a7ac43b52a9cd5b98aa56bdb3180b6e74061fc76->enter($__internal_40fba7d8c03934aa88a7af59a7ac43b52a9cd5b98aa56bdb3180b6e74061fc76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_40fba7d8c03934aa88a7af59a7ac43b52a9cd5b98aa56bdb3180b6e74061fc76->leave($__internal_40fba7d8c03934aa88a7af59a7ac43b52a9cd5b98aa56bdb3180b6e74061fc76_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0611ee1410158b4322981a51f422cc2261d17208ffb409acb32ca5a6f2a8c804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0611ee1410158b4322981a51f422cc2261d17208ffb409acb32ca5a6f2a8c804->enter($__internal_0611ee1410158b4322981a51f422cc2261d17208ffb409acb32ca5a6f2a8c804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_0611ee1410158b4322981a51f422cc2261d17208ffb409acb32ca5a6f2a8c804->leave($__internal_0611ee1410158b4322981a51f422cc2261d17208ffb409acb32ca5a6f2a8c804_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a0d62064c9e80857bf7c93d0fa51bd7488bb4560a1efe0473f999a11fd5215f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d62064c9e80857bf7c93d0fa51bd7488bb4560a1efe0473f999a11fd5215f0->enter($__internal_a0d62064c9e80857bf7c93d0fa51bd7488bb4560a1efe0473f999a11fd5215f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_a0d62064c9e80857bf7c93d0fa51bd7488bb4560a1efe0473f999a11fd5215f0->leave($__internal_a0d62064c9e80857bf7c93d0fa51bd7488bb4560a1efe0473f999a11fd5215f0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\RF17\\Documents\\NetBeansProjects\\symfony\\app\\Resources\\views\\base.html.twig");
    }
}
