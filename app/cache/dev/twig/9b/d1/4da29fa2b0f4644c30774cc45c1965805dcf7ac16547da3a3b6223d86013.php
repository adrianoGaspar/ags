<?php

/* FinanceiroBundle:Os:show.html.twig */
class __TwigTemplate_9bd14da29fa2b0f4644c30774cc45c1965805dcf7ac16547da3a3b6223d86013 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Os</h1>

    <table class=\"table\">
        <thead>
            <th>Id</th>
";
        // line 10
        echo "            <th>Dataprometida</th>
            <th>Datapacote</th>
            <th>Dataentrega</th>
            <th>Valorcobrado</th>
            <th>Obs</th>
            <th>Status</th>
        </thead>
        <tbody>
            <tr>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
";
        // line 21
        echo "                <td>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dataPrometida", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "</td>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dataPacote", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "</td>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dataEntrega", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "</td>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "valorCobrado", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "obs", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ítens</th>
                <td colspan=\"6\">
                    <table class=\"table\">
                        <thead>
                            <th>Qtd</th>
                            <th>Ítem</th>
                            <th>Serviço</th>
                            <th>Un</th>
                            <th>Valor</th>
                        </thead>
                        <tbody>
                            ";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "osHasItens", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 41
            echo "                            <tr>
                                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "qtd", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "item", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "servico", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "un", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "valor", array()), "html", null, true);
            echo "</td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                        </tbody>
                    </table>
                </td>
                
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("os");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("os_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 68
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "FinanceiroBundle:Os:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 68,  151 => 64,  143 => 59,  131 => 49,  122 => 46,  118 => 45,  114 => 44,  110 => 43,  106 => 42,  103 => 41,  99 => 40,  82 => 26,  78 => 25,  74 => 24,  70 => 23,  66 => 22,  61 => 21,  57 => 19,  46 => 10,  39 => 4,  36 => 3,  11 => 1,);
    }
}
