<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* prestataires/show.html.twig */
class __TwigTemplate_7f16e1da10e10ab4829a1ae80c3bf1628777ca8eac2aaef828d70d96085029d7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prestataires/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "prestataires/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Prestataires";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Prestataires</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prestataire"]) || array_key_exists("prestataire", $context) ? $context["prestataire"] : (function () { throw new RuntimeError('Variable "prestataire" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Matricule</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prestataire"]) || array_key_exists("prestataire", $context) ? $context["prestataire"] : (function () { throw new RuntimeError('Variable "prestataire" does not exist.', 16, $this->source); })()), "matricule", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Denomination</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prestataire"]) || array_key_exists("prestataire", $context) ? $context["prestataire"] : (function () { throw new RuntimeError('Variable "prestataire" does not exist.', 20, $this->source); })()), "denomination", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prestataire"]) || array_key_exists("prestataire", $context) ? $context["prestataire"] : (function () { throw new RuntimeError('Variable "prestataire" does not exist.', 24, $this->source); })()), "adresse", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contacte</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prestataire"]) || array_key_exists("prestataire", $context) ? $context["prestataire"] : (function () { throw new RuntimeError('Variable "prestataire" does not exist.', 28, $this->source); })()), "contacte", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prestataire"]) || array_key_exists("prestataire", $context) ? $context["prestataire"] : (function () { throw new RuntimeError('Variable "prestataire" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prestataire"]) || array_key_exists("prestataire", $context) ? $context["prestataire"] : (function () { throw new RuntimeError('Variable "prestataire" does not exist.', 36, $this->source); })()), "status", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prestataires_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prestataires_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["prestataire"]) || array_key_exists("prestataire", $context) ? $context["prestataire"] : (function () { throw new RuntimeError('Variable "prestataire" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 45
        echo twig_include($this->env, $context, "prestataires/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "prestataires/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 45,  136 => 43,  131 => 41,  123 => 36,  116 => 32,  109 => 28,  102 => 24,  95 => 20,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Prestataires{% endblock %}

{% block body %}
    <h1>Prestataires</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ prestataire.id }}</td>
            </tr>
            <tr>
                <th>Matricule</th>
                <td>{{ prestataire.matricule }}</td>
            </tr>
            <tr>
                <th>Denomination</th>
                <td>{{ prestataire.denomination }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ prestataire.adresse }}</td>
            </tr>
            <tr>
                <th>Contacte</th>
                <td>{{ prestataire.contacte }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ prestataire.email }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ prestataire.status }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('prestataires_index') }}\">back to list</a>

    <a href=\"{{ path('prestataires_edit', {'id': prestataire.id}) }}\">edit</a>

    {{ include('prestataires/_delete_form.html.twig') }}
{% endblock %}
", "prestataires/show.html.twig", "/var/www/html/my symphon/Fil_touge_RTT/templates/prestataires/show.html.twig");
    }
}
