<?php

/* transaction/list.html.twig */
class __TwigTemplate_61e8419d3ce8da6e2348d180b0f9a62d9fa24aa3706226bda387220d3b794c7c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "transaction/list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "transaction/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "transaction/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "List Transactions";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 8
        echo "
    <div class=\"container\">
        <div class=\"row mb-5\">
            <div class=\"col-sm-12 align-content-center text-center\">
                <div class=\"h1\">Transactions</div>
            </div>
        </div>


        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new Twig_Error_Runtime('Variable "transactions" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
            // line 18
            echo "            <div class=\"row justify-content-center\">
                <div class=\"card\">
                    <div class=\"card-header text-center\">
                        <h3>transaction number : ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "id", array()), "html", null, true);
            echo "</h3>
                    </div>
                    <div class=\"card-body text-center\">
                            <strong>transaction amount : </strong>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "amount", array()), "html", null, true);
            echo " <br>
                            <strong>transaction date : </strong>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "date", array()), "Y-m-d h-m-s"), "html", null, true);
            echo " <br>
                        <div class=\"mb-3\"></div>
                        <div class=\"justify-content-center\">
                            <a href=\" ";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_transaction", array("id" => twig_get_attribute($this->env, $this->source, $context["transaction"], "id", array()))), "html", null, true);
            echo " \"><button class=\"btn btn-danger\">delete transaction</button></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class=\"mt-4\"></div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
    </div>

    <div class=\"mt-4\">
        <div class=\"row justify-content-center \">
            <div><a href=\" ";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_transaction");
        echo " \"><button class=\"btn btn-primary mr-5\">create transaction</button></a></div>
        </div>
        <div class=\"mt-3\"></div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "transaction/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 42,  126 => 37,  111 => 28,  105 => 25,  101 => 24,  95 => 21,  90 => 18,  86 => 17,  75 => 8,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}List Transactions{% endblock %}

{% block body %}

    {# Faire une transaction depuis mon compte vers celui d’un de mes bénéficiaire #}

    <div class=\"container\">
        <div class=\"row mb-5\">
            <div class=\"col-sm-12 align-content-center text-center\">
                <div class=\"h1\">Transactions</div>
            </div>
        </div>


        {% for transaction in transactions %}
            <div class=\"row justify-content-center\">
                <div class=\"card\">
                    <div class=\"card-header text-center\">
                        <h3>transaction number : {{ transaction.id }}</h3>
                    </div>
                    <div class=\"card-body text-center\">
                            <strong>transaction amount : </strong>{{ transaction.amount }} <br>
                            <strong>transaction date : </strong>{{ transaction.date|date('Y-m-d h-m-s') }} <br>
                        <div class=\"mb-3\"></div>
                        <div class=\"justify-content-center\">
                            <a href=\" {{ path('delete_transaction', {'id': transaction.id}) }} \"><button class=\"btn btn-danger\">delete transaction</button></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class=\"mt-4\"></div>

        {% endfor %}

    </div>

    <div class=\"mt-4\">
        <div class=\"row justify-content-center \">
            <div><a href=\" {{ path('create_transaction') }} \"><button class=\"btn btn-primary mr-5\">create transaction</button></a></div>
        </div>
        <div class=\"mt-3\"></div>
    </div>

{% endblock %}
", "transaction/list.html.twig", "/var/www/symfony/templates/transaction/list.html.twig");
    }
}
