<?php

/* ::base.html.twig */
class __TwigTemplate_b714150ddfdb1b2bb411641bfb12f3a06b01ea2d06ad6af8aa329d9fca37c3b0 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        
        ";
        // line 9
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fddb9b6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fddb9b6_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/fddb9b6_part_1.css");
            // line 10
            echo "            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
        } else {
            // asset "fddb9b6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fddb9b6") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/fddb9b6.css");
            echo "            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "        
        
        ";
        // line 21
        echo "        <script src=\"//code.jquery.com/jquery-1.11.2.min.js\"></script>
        
        
        
    </head>
    <body>
        <div class=\"navbar-header navbar-default\">
            <a href=\"/\" class=\"navbar-brand\">Lavanderia Imperatriz</a>
            <button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar-main\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
        </div>
        <div class=\"navbar-collapse collapse  navbar-default\" id=\"navbar-main\">
            <ul class=\"nav navbar-nav navbar-default\">
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"themes\">PDV <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu navbar-default\" aria-labelledby=\"themes\">
                        <li><a tabindex=\"-1\" href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("os_new");
        echo "\">Cadastrar Roll</a></li>
                        <li class=\"divider\"></li>
                        <li><a tabindex=\"-1\" href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("os");
        echo "\">Consultar Roll</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"themes\">Clientes<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu navbar-default\" aria-labelledby=\"themes\">
                        <li><a tabindex=\"-1\" href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("cliente");
        echo "\">Clientes</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"themes\">Fornecedores <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu navbar-default\" aria-labelledby=\"themes\">
                        <li><a tabindex=\"-1\" href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("pedido");
        echo "\">Pedidos</a></li>
                        <li class=\"divider\"></li>
                        <li><a tabindex=\"-1\" href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("fornecedor");
        echo "\">Fornecedores</a></li>
                        <li class=\"divider\"></li>
                        <li><a tabindex=\"-1\" href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("insumo");
        echo "\">Insumos</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"themes\">Financeiro <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu navbar-default\" aria-labelledby=\"themes\">
                        <li><a tabindex=\"-1\" href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("lancamento");
        echo "\">Movimentação</a></li>
                        <li class=\"divider\"></li>
                        <li><a tabindex=\"-1\" href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("planoconta");
        echo "\">Plano de contas</a></li>
                        <li class=\"divider\"></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"themes\">Relatórios <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu navbar-default\" aria-labelledby=\"themes\">
                        <li><a tabindex=\"-1\" href=\"relatorioAnalitico.php\">Analítico</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"themes\">Configurações <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu navbar-default\" aria-labelledby=\"themes\">
                        <li><a tabindex=\"-1\" href=\"pontosColeta.php\">Pontos de coleta</a></li>
                        <li class=\"divider\"></li>
                        <li><a tabindex=\"-1\" href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("pais");
        echo "\">Países</a></li>
                        <li><a tabindex=\"-1\" href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("estado");
        echo "\">Estados</a></li>
                        <li><a tabindex=\"-1\" href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("cidade");
        echo "\">Cidades</a></li>
                        <li class=\"divider\"></li>
                        <li><a tabindex=\"-1\" href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("tipocobrancapagamento");
        echo "\">Forma de pagamento</a></li>
                        <li class=\"divider\"></li>
                        <li><a tabindex=\"-1\" href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("servico");
        echo "\">Serviços</a></li>
                        <li><a tabindex=\"-1\" href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("item");
        echo "\">Peças</a></li>
                        <li class=\"divider\"></li>
                        <li><a tabindex=\"-1\" href=\"planoContaPadrao.php\">Plano de contas padrão</a></li>
                    </ul>
                </li>
                <li>
                    <a href=\"#\">Ajuda</a>
                </li>
            </ul>

            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"login.php\">Sair</a></li>
            </ul>
        </div>
        
        ";
        // line 103
        $this->displayBlock('body', $context, $blocks);
        // line 104
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 105
        echo "
        ";
        // line 106
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a56fa94_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a56fa94_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a56fa94_part_1.js");
            // line 107
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "a56fa94_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a56fa94_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a56fa94_part_2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "a56fa94"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a56fa94") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a56fa94.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 109
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 103
    public function block_body($context, array $blocks = array())
    {
    }

    // line 104
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 104,  238 => 103,  233 => 6,  227 => 5,  221 => 109,  201 => 107,  197 => 106,  194 => 105,  191 => 104,  189 => 103,  171 => 88,  167 => 87,  162 => 85,  157 => 83,  153 => 82,  149 => 81,  131 => 66,  126 => 64,  117 => 58,  112 => 56,  107 => 54,  98 => 48,  89 => 42,  84 => 40,  63 => 21,  59 => 12,  45 => 10,  41 => 9,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
