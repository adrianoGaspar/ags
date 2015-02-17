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
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"themes\">Clientes <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu navbar-default\" aria-labelledby=\"themes\">
                        <li><a tabindex=\"-1\" href=\"cadastrarClientePj.php\">Cadastrar PJ</a></li>
                        <li><a tabindex=\"-1\" href=\"cadastrarClientePf.php\">Cadastrar PF</a></li>
                        <li><a tabindex=\"-1\" href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("cliente");
        echo "\">Consultar</a></li>
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
        // line 72
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
                        <li><a tabindex=\"-1\" href=\"cadastrarPais.php\">Cadastrar País</a></li>
                        <li><a tabindex=\"-1\" href=\"cadastrarEstado.php\">Cadastrar Estado</a></li>
                        <li><a tabindex=\"-1\" href=\"cadastrarCidade.php\">Cadastrar Cidade</a></li>
                        <li class=\"divider\"></li>
                        <li><a tabindex=\"-1\" href=\"cadastrarFormaPagamento.php\">Cadastrar Forma de pagamento</a></li>
                        <li class=\"divider\"></li>
                        <li><a tabindex=\"-1\" href=\"cadastrarServico.php\">Cadastrar Serviço</a></li>
                        <li><a tabindex=\"-1\" href=\"cadastrarPeca.php\">Cadastrar Peça</a></li>
                        <li><a tabindex=\"-1\" href=\"cadastrarTecido.php\">Cadastrar Tecido</a></li>
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
        // line 111
        $this->displayBlock('body', $context, $blocks);
        // line 112
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 113
        echo "
        ";
        // line 114
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a56fa94_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a56fa94_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a56fa94_part_1.js");
            // line 115
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
        // line 117
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

    // line 111
    public function block_body($context, array $blocks = array())
    {
    }

    // line 112
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
        return array (  221 => 112,  216 => 111,  211 => 6,  205 => 5,  199 => 117,  179 => 115,  175 => 114,  172 => 113,  169 => 112,  167 => 111,  125 => 72,  100 => 50,  89 => 42,  84 => 40,  63 => 21,  59 => 12,  45 => 10,  41 => 9,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
