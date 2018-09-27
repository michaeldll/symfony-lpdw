<?php

/* account/list.html.twig */
class __TwigTemplate_3d020ed4719c607822f07ddb28d868d86e8859890826344e57a9f7483b69dcc3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "account/list.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/list.html.twig"));

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

        echo "List Account";
        
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
        echo "    <div class=\"row\">
        <div class=\"col-sm-12 align-content-center text-center\">
            <div class=\"h1\">Accounts</div>
            <div class=\"h1\">";
        if ($this->env->isDebug()) {
            // line 9
            \Symfony\Component\VarDumper\VarDumper::dump("test");
        }
        echo "</div>
            <div class=\"mb-5\"></div>
        </div>
    </div>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new Twig_Error_Runtime('Variable "accounts" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["account"]) {
            // line 14
            echo "        <div class=\"row justify-content-center\">
            <div class=\"card\">
                <div class=\"card-header text-center\">
                    <h3>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "name", array()), "html", null, true);
            echo "</h3>
                </div>
                <div class=\"card-body\">

                        <strong>compte numéro : </strong>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "id", array()), "html", null, true);
            echo "<br>
                        <div class=\"mt-2\"></div>
                        <strong>solde : </strong>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "balance", array()), "html", null, true);
            echo " €<br>
                        <div class=\"mt-2\"></div>
                        <strong>bénéficiaires :</strong>
                        <div class=\"mt-3\"></div>
                        <table class=\"table\">
                        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["account"], "beneficiary", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["beneficiaire"]) {
                // line 29
                echo "                                <tr>
                                    <td>
                                        nom :
                                    </td>
                                    <td>
                                        ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["beneficiaire"], "name", array()), "html", null, true);
                echo "
                                    </td>
                                    <td>
                                        <a href=\" ";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_beneficiary", array("id" => twig_get_attribute($this->env, $this->source, $context["account"], "id", array()), "ben_id" => twig_get_attribute($this->env, $this->source, $context["beneficiaire"], "id", array()))), "html", null, true);
                echo " \"><button class=\"btn btn-danger\">delete</button></a>
                                    </td>
                                    <td>
                                        <a href=\" ";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pay_beneficiary", array("id" => twig_get_attribute($this->env, $this->source, $context["account"], "id", array()), "ben_id" => twig_get_attribute($this->env, $this->source, $context["beneficiaire"], "id", array()))), "html", null, true);
                echo " \"><button class=\"btn btn-primary\">pay beneficiary</button></a>
                                    </td>
                                </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['beneficiaire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                        </table>
                        <a href=\" ";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_account", array("id" => twig_get_attribute($this->env, $this->source, $context["account"], "id", array()))), "html", null, true);
            echo " \"><button class=\"btn btn-danger\">delete</button></a>
                        <a href=\" ";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modify_account", array("id" => twig_get_attribute($this->env, $this->source, $context["account"], "id", array()))), "html", null, true);
            echo " \"><button class=\"btn btn-secondary\">modify</button></a>
                        <a href=\" ";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_beneficiary", array("id" => twig_get_attribute($this->env, $this->source, $context["account"], "id", array()))), "html", null, true);
            echo " \"><button class=\"btn btn-light\">add beneficiary</button></a>
                        <a href=\" ";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showTransactions_account", array("id" => twig_get_attribute($this->env, $this->source, $context["account"], "id", array()))), "html", null, true);
            echo " \"><button class=\"btn btn-light\">show transactions</button></a>

                </div>
            </div>

        </div>
        <div class=\"mt-4\"></div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['account'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
    <div class=\"row\">
        <div class=\"col-sm-12 align-content-center text-center\">
            <a href=\" ";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_account");
        echo " \"><button class=\"btn btn-primary\">add account</button></a>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 60,  178 => 57,  163 => 48,  159 => 47,  155 => 46,  151 => 45,  148 => 44,  138 => 40,  132 => 37,  126 => 34,  119 => 29,  115 => 28,  107 => 23,  102 => 21,  95 => 17,  90 => 14,  86 => 13,  78 => 9,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}List Account{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-sm-12 align-content-center text-center\">
            <div class=\"h1\">Accounts</div>
            <div class=\"h1\">{% dump('test') %}</div>
            <div class=\"mb-5\"></div>
        </div>
    </div>
    {% for account in accounts %}
        <div class=\"row justify-content-center\">
            <div class=\"card\">
                <div class=\"card-header text-center\">
                    <h3>{{ account.name }}</h3>
                </div>
                <div class=\"card-body\">

                        <strong>compte numéro : </strong>{{ account.id }}<br>
                        <div class=\"mt-2\"></div>
                        <strong>solde : </strong>{{ account.balance }} €<br>
                        <div class=\"mt-2\"></div>
                        <strong>bénéficiaires :</strong>
                        <div class=\"mt-3\"></div>
                        <table class=\"table\">
                        {% for beneficiaire in account.beneficiary %}
                                <tr>
                                    <td>
                                        nom :
                                    </td>
                                    <td>
                                        {{ beneficiaire.name }}
                                    </td>
                                    <td>
                                        <a href=\" {{ path('delete_beneficiary', {'id': account.id, 'ben_id': beneficiaire.id}) }} \"><button class=\"btn btn-danger\">delete</button></a>
                                    </td>
                                    <td>
                                        <a href=\" {{ path('pay_beneficiary', {'id': account.id, 'ben_id': beneficiaire.id}) }} \"><button class=\"btn btn-primary\">pay beneficiary</button></a>
                                    </td>
                                </tr>
                        {% endfor %}
                        </table>
                        <a href=\" {{ path('delete_account', {'id': account.id}) }} \"><button class=\"btn btn-danger\">delete</button></a>
                        <a href=\" {{ path('modify_account', {'id': account.id}) }} \"><button class=\"btn btn-secondary\">modify</button></a>
                        <a href=\" {{ path('add_beneficiary', {'id': account.id}) }} \"><button class=\"btn btn-light\">add beneficiary</button></a>
                        <a href=\" {{ path('showTransactions_account', {'id': account.id}) }} \"><button class=\"btn btn-light\">show transactions</button></a>

                </div>
            </div>

        </div>
        <div class=\"mt-4\"></div>

    {% endfor %}

    <div class=\"row\">
        <div class=\"col-sm-12 align-content-center text-center\">
            <a href=\" {{ path('create_account') }} \"><button class=\"btn btn-primary\">add account</button></a>
        </div>
    </div>

{% endblock %}
", "account/list.html.twig", "/var/www/symfony/templates/account/list.html.twig");
    }
}
