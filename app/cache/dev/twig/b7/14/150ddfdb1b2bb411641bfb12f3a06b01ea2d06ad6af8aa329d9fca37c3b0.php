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
                        <li><a tabindex=\"-1\" href=\"cadastrarPedido.php\">Cadastrar Pedidos</a></li>
                        <li><a tabindex=\"-1\" href=\"consultarPedido.php\">Consultar Pedidos</a></li>
                        <li class=\"divider\"></li>
                        <li><a tabindex=\"-1\" href=\"cadastrarFornecedor.php\">Cadastrar Fornecedor</a></li>
                        <li><a tabindex=\"-1\" href=\"consultarFornecedor.php\">Consultar Fornecedor</a></li>
                        <li class=\"divider\"></li>
                        <li><a tabindex=\"-1\" href=\"cadastrarInsumo.php\">Cadastrar Insumo</a></li>
                        <li><a tabindex=\"-1\" href=\"consultarInsumo.php\">Consultar Insumo</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"themes\">Financeiro <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu navbar-default\" aria-labelledby=\"themes\">
                        <li><a tabindex=\"-1\" href=\"agendarMovimentacao.php\">Cadastrar Movimentação</a></li>
                        <li><a tabindex=\"-1\" href=\"consultarMovimentacao.php\">Consultar Movimentação</a></li>
                        <li class=\"divider\"></li>
                        <li><a tabindex=\"-1\" href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("planoconta");
        echo "\">Plano de contas</a></li>
                        <li class=\"divider\"></li>
                        <li><a tabindex=\"-1\" href=\"cadastrarBeneficiario.php\">Beneficiários</a></li>
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
        // line 86
        echo $this->env->getExtension('routing')->getPath("pais");
        echo "\">Países</a></li>
                        <li><a tabindex=\"-1\" href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("estado");
        echo "\">Estados</a></li>
                        <li><a tabindex=\"-1\" href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("cidade");
        echo "\">Cidades</a></li>
                        <li class=\"divider\"></li>
                        <li><a tabindex=\"-1\" href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("tipocobrancapagamento");
        echo "\">Forma de pagamento</a></li>
                        <li class=\"divider\"></li>
                        <li><a tabindex=\"-1\" href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("servico");
        echo "\">Serviços</a></li>
                        <li><a tabindex=\"-1\" href=\"";
        // line 93
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
        // line 108
        $this->displayBlock('body', $context, $blocks);
        // line 109
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 110
        echo "
        ";
        // line 111
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a56fa94_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a56fa94_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a56fa94_part_1.js");
            // line 112
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
        // line 114
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

    // line 108
    public function block_body($context, array $blocks = array())
    {
    }

    // line 109
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
        return array (  236 => 109,  231 => 108,  226 => 6,  220 => 5,  214 => 114,  194 => 112,  190 => 111,  187 => 110,  184 => 109,  182 => 108,  164 => 93,  160 => 92,  155 => 90,  150 => 88,  146 => 87,  142 => 86,  123 => 70,  98 => 48,  89 => 42,  84 => 40,  63 => 21,  59 => 12,  45 => 10,  41 => 9,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
