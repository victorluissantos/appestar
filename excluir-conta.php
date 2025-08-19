<?php
$page_title = 'Excluir Conta - AppEstar';
$page_description = 'Solicite a exclusão de sua conta e dados do aplicativo AppEstar - Estacionamento Rotativo Digital de Curitiba';
include 'includes/header.php';
?>

<!-- CSS específico para exclusão de conta -->
<link href="public/css/termos.css" rel="stylesheet">

<!-- Conteúdo da página -->
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <!-- Cabeçalho -->
            <div class="terms-header text-center">
                <h1>Excluir Conta</h1>
                <p class="lead">AppEstar - Estacionamento Rotativo Digital</p>
                <p class="text-muted">Solicite a exclusão de sua conta e dados pessoais</p>
            </div>

            <!-- Aviso Importante -->
            <div class="alert alert-warning border-0 shadow-sm mb-4">
                <div class="d-flex align-items-center">
                    <i class="bi bi-exclamation-triangle-fill text-warning me-3" style="font-size: 1.5rem;"></i>
                    <div>
                        <h5 class="alert-heading mb-1">⚠️ Ação Irreversível</h5>
                        <p class="mb-0">A exclusão de conta é permanente e não pode ser desfeita. Todos os seus dados serão removidos do sistema.</p>
                    </div>
                </div>
            </div>

            <!-- Informações sobre Exclusão -->
            <div class="terms-card">
                <div class="card-body">
                    
                    <div class="terms-section">
                        <h2>1. O que acontece quando você exclui sua conta?</h2>
                        <p>
                            Ao solicitar a exclusão de sua conta no AppEstar, os seguintes dados serão <strong>permanentemente removidos</strong>:
                        </p>
                        
                        <h3 class="h5 fw-bold text-danger mt-4 mb-3">🚫 Dados que serão DELETADOS:</h3>
                        <ul>
                            <li><strong>Conta de usuário:</strong> Login, senha, perfil completo</li>
                            <li><strong>Dados pessoais:</strong> Nome, CPF, email, telefone</li>
                            <li><strong>Veículos cadastrados:</strong> Placas, modelos, cores</li>
                            <li><strong>Histórico de estacionamentos:</strong> Todas as sessões de estacionamento</li>
                            <li><strong>Preferências:</strong> Configurações salvas, favoritos</li>
                            <li><strong>Dados de pagamento:</strong> Cartões salvos, histórico de transações</li>
                            <li><strong>Notificações:</strong> Configurações de alertas</li>
                        </ul>

                        <h3 class="h5 fw-bold text-success mt-4 mb-3">✅ Dados que serão MANTIDOS (por obrigação legal):</h3>
                        <ul>
                            <li><strong>Comprovantes fiscais:</strong> Recibos de pagamento (5 anos - obrigação fiscal)</li>
                            <li><strong>Logs de auditoria:</strong> Registros de segurança (2 anos - compliance)</li>
                            <li><strong>Dados de compliance:</strong> Informações necessárias para órgãos reguladores</li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h2>2. Como solicitar a exclusão de sua conta</h2>
                        <p>
                            Para solicitar a exclusão de sua conta no AppEstar, siga um destes métodos:
                        </p>
                        
                        <h3 class="h5 fw-bold text-primary mt-4 mb-3">📱 Método 1: Através do Aplicativo (Recomendado)</h3>
                        <ol>
                            <li>Abra o aplicativo <strong>AppEstar</strong> no seu dispositivo</li>
                            <li>Faça login na sua conta</li>
                            <li>Toque em <strong>Configurações</strong> (ícone de engrenagem)</li>
                            <li>Selecione <strong>Privacidade e Segurança</strong></li>
                            <li>Toque em <strong>Excluir Conta</strong></li>
                            <li>Confirme sua senha</li>
                            <li>Leia as informações e toque em <strong>Confirmar Exclusão</strong></li>
                        </ol>

                        <h3 class="h5 fw-bold text-primary mt-4 mb-3">📧 Método 2: Por Email</h3>
                        <ol>
                            <li>Envie um email para: <strong>privacidade@curitiba.pr.gov.br</strong></li>
                            <li>Assunto: <strong>"Solicitação de Exclusão de Conta - AppEstar"</strong></li>
                            <li>Inclua as seguintes informações:</li>
                            <ul>
                                <li>Nome completo</li>
                                <li>CPF</li>
                                <li>Email cadastrado no app</li>
                                <li>Motivo da exclusão (opcional)</li>
                                <li>Confirmação de que entende que a ação é irreversível</li>
                            </ul>
                        </ol>

                        <h3 class="h5 fw-bold text-primary mt-4 mb-3">📞 Método 3: Por Telefone</h3>
                        <ol>
                            <li>Ligue para: <strong>156</strong> (Central de Atendimento)</li>
                            <li>Informe que deseja solicitar a exclusão de conta no AppEstar</li>
                            <li>Forneça suas informações de identificação</li>
                            <li>Confirme sua solicitação</li>
                        </ol>

                        <h3 class="h5 fw-bold text-primary mt-4 mb-3">🏢 Método 4: Presencial</h3>
                        <ol>
                            <li>Dirija-se à <strong>Prefeitura de Curitiba</strong></li>
                            <li>Setor: <strong>Secretaria de Trânsito</strong></li>
                            <li>Endereço: <strong>Rua da Cidadania, Centro Cívico, Curitiba - PR</strong></li>
                            <li>Horário: <strong>Segunda a Sexta: 8h às 18h</strong></li>
                            <li>Documentos necessários: <strong>RG/CPF e comprovante de residência</strong></li>
                        </ol>
                    </div>

                    <div class="terms-section">
                        <h2>3. Prazo para processamento</h2>
                        <p>
                            Após sua solicitação, seguimos os seguintes prazos:
                        </p>
                        <ul>
                            <li><strong>Confirmação de recebimento:</strong> Até 24 horas úteis</li>
                            <li><strong>Processamento da exclusão:</strong> Até 15 dias úteis</li>
                            <li><strong>Confirmação de conclusão:</strong> Até 48 horas após a exclusão</li>
                        </ul>
                        <p class="text-muted mt-2">
                            <i class="bi bi-info-circle me-2"></i>
                            Em casos excepcionais, o prazo pode ser estendido, mas você será notificado.
                        </p>
                    </div>

                    <div class="terms-section">
                        <h2>4. O que acontece após a exclusão</h2>
                        <p>
                            Após a exclusão de sua conta ser processada:
                        </p>
                        <ul>
                            <li><strong>Login bloqueado:</strong> Você não conseguirá mais acessar o app</li>
                            <li><strong>Dados removidos:</strong> Todas as informações pessoais são deletadas</li>
                            <li><strong>Email de confirmação:</strong> Receberá confirmação da exclusão</li>
                            <li><strong>Nova conta:</strong> Poderá criar uma nova conta se desejar</li>
                            <li><strong>Histórico perdido:</strong> Não será possível recuperar dados excluídos</li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h2>5. Alternativas à exclusão de conta</h2>
                        <p>
                            Antes de excluir sua conta, considere estas alternativas:
                        </p>
                        
                        <h3 class="h5 fw-bold text-primary mt-4 mb-3">🔄 Desativar temporariamente</h3>
                        <ul>
                            <li>Mantenha sua conta mas desative as notificações</li>
                            <li>Remova veículos cadastrados</li>
                            <li>Limpe o histórico de uso</li>
                        </ul>

                        <h3 class="h5 fw-bold text-primary mt-4 mb-3">📱 Usar como visitante</h3>
                        <ul>
                            <li>Faça logout e use o app sem conta</li>
                            <li>Funcionalidades limitadas mas sem dados pessoais</li>
                            <li>Pode criar nova conta quando quiser</li>
                        </ul>

                        <h3 class="h5 fw-bold text-primary mt-4 mb-3">⚙️ Ajustar configurações</h3>
                        <ul>
                            <li>Desativar notificações push</li>
                            <li>Remover dados de localização</li>
                            <li>Limpar cache e dados do app</li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h2>6. Recuperação de dados</h2>
                        <p>
                            <strong>IMPORTANTE:</strong> A exclusão de conta é <strong>permanente e irreversível</strong>.
                        </p>
                        <ul>
                            <li>❌ <strong>Não é possível</strong> recuperar dados pessoais excluídos</li>
                            <li>❌ <strong>Não é possível</strong> restaurar histórico de estacionamentos</li>
                            <li>❌ <strong>Não é possível</strong> recuperar preferências salvas</li>
                            <li>✅ <strong>É possível</strong> criar uma nova conta do zero</li>
                            <li>✅ <strong>É possível</strong> acessar comprovantes fiscais (se necessário)</li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h2>7. Conformidade com LGPD</h2>
                        <p>
                            Esta política de exclusão de conta está em conformidade com a Lei Geral de Proteção de Dados (LGPD):
                        </p>
                        <ul>
                            <li><strong>Direito de Exclusão:</strong> Art. 18, IV da LGPD</li>
                            <li><strong>Prazo de Resposta:</strong> 15 dias úteis conforme Art. 19</li>
                            <li><strong>Transparência:</strong> Informações claras sobre o processo</li>
                            <li><strong>Segurança:</strong> Processo seguro de exclusão</li>
                            <li><strong>Auditoria:</strong> Registro de todas as solicitações</li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h2>8. Contato e Suporte</h2>
                        <p>
                            Para dúvidas sobre exclusão de conta:
                        </p>
                        <ul>
                            <li><strong>Email específico:</strong> exclusao-conta@curitiba.pr.gov.br</li>
                            <li><strong>Privacidade geral:</strong> privacidade@curitiba.pr.gov.br</li>
                            <li><strong>Telefone:</strong> 156 (Central de Atendimento)</li>
                            <li><strong>Horário:</strong> Segunda a Sexta: 8h às 18h</li>
                            <li><strong>Endereço:</strong> Prefeitura de Curitiba, PR</li>
                        </ul>
                    </div>

                    <hr class="terms-separator">

                    <div class="terms-footer-content text-center">
                        <p class="mb-0">
                            <strong>AppEstar</strong> - Estacionamento Rotativo Digital<br>
                            <span class="text-muted">Prefeitura de Curitiba - Paraná - Brasil</span>
                        </p>
                        <p class="text-muted mt-2 small">
                            Esta página atende aos requisitos do Google Play Store para exclusão de conta e dados.
                        </p>
                    </div>

                </div>
            </div>

            <!-- Formulário de Solicitação -->
            <div class="card border-0 shadow-sm mt-4">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">
                        <i class="bi bi-trash me-2"></i>
                        Solicitar Exclusão de Conta
                    </h4>
                </div>
                <div class="card-body p-4">
                    <form class="deletion-form">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nome" class="form-label">Nome Completo *</label>
                                <input type="text" class="form-control" id="nome" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="cpf" class="form-label">CPF *</label>
                                <input type="text" class="form-control" id="cpf" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email Cadastrado *</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="telefone" class="form-label">Telefone</label>
                                <input type="tel" class="form-control" id="telefone">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="motivo" class="form-label">Motivo da Exclusão (Opcional)</label>
                            <textarea class="form-control" id="motivo" rows="3" placeholder="Conte-nos o motivo da exclusão para melhorarmos nossos serviços..."></textarea>
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="confirmacao" required>
                                <label class="form-check-label" for="confirmacao">
                                    <strong>Confirmo que entendo que a exclusão de conta é PERMANENTE e IRREVERSÍVEL.</strong> 
                                    Todos os meus dados pessoais, histórico de estacionamentos e configurações serão perdidos para sempre.
                                </label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="lgpd" required>
                                <label class="form-check-label" for="lgpd">
                                    <strong>Autorizo o tratamento de meus dados</strong> para processar esta solicitação de exclusão, 
                                    conforme nossa <a href="privacidade.php">Política de Privacidade</a>.
                                </label>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-danger btn-lg">
                                <i class="bi bi-trash me-2"></i>
                                Solicitar Exclusão de Conta
                            </button>
                        </div>

                        <div class="alert alert-info mt-3 mb-0">
                            <i class="bi bi-info-circle me-2"></i>
                            <strong>Nota:</strong> Este formulário é apenas para solicitações. A exclusão real será processada 
                            após verificação de identidade e confirmação através de um dos métodos oficiais listados acima.
                        </div>
                    </form>
                </div>
            </div>

            <!-- Botões de ação -->
            <div class="back-button text-center">
                <a href="index.php" class="btn btn-primary me-3">
                    <i class="bi bi-arrow-left me-2"></i>
                    Voltar ao Início
                </a>
                <a href="privacidade.php" class="btn btn-outline-primary me-3">
                    <i class="bi bi-shield-check me-2"></i>
                    Política de Privacidade
                </a>
                <a href="termos.php" class="btn btn-outline-primary">
                    <i class="bi bi-file-text me-2"></i>
                    Termos de Uso
                </a>
            </div>

        </div>
    </div>
</div>

<!-- JavaScript para o formulário -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.deletion-form');
    
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simular envio
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Processando...';
            submitBtn.disabled = true;
            
            // Simular delay
            setTimeout(() => {
                alert('Sua solicitação foi recebida! Entraremos em contato em até 24 horas úteis para confirmar a exclusão de sua conta.');
                
                // Resetar formulário
                this.reset();
                
                // Restaurar botão
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 2000);
        });
    }
});
</script>

<?php include 'includes/footer.php'; ?> 