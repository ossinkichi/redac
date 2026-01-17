# TODO - Projeto REDAC (Sistema de Gerenciamento Escolar)

## Visão Geral

Este projeto é um sistema de gerenciamento escolar desenvolvido em Laravel, visando substituir um sistema legado em PHP puro. Inclui funcionalidades para alunos, professores, secretária, cursos, classes, notas, frequência e conteúdos.

## Status Atual

-   ✅ Estrutura Laravel 12 configurada
-   ✅ Models e Migrations criadas para todas as entidades principais
-   ✅ Repositories e Services implementados para estudantes
-   ✅ Autenticação básica (login) implementada
-   ✅ API básica para estudantes
-   ✅ Views básicas (login, register, home)
-   ✅ CRUD para Professores implementado (TeacherController)

## TODOs Pendentes

### 1. Autenticação e Autorização

-   [ ] Completar implementação do registro de usuários (UserController::AuthenticateRegister)
-   [ ] Implementar logout completo
-   [ ] Adicionar middleware para proteção de rotas
-   [ ] Implementar recuperação de senha
-   [ ] Adicionar roles e permissões (admin, professor, aluno, secretária)
-   [ ] Implementar autenticação via API (JWT ou Sanctum)

### 2. CRUD de Usuários

-   [ ] Implementar CRUD completo para Alunos (StudentController)
-   [x] Implementar CRUD completo para Professores (TeacherController)
-   [ ] Implementar CRUD completo para Secretária (SecretaryController)
-   [ ] Implementar CRUD completo para Usuários (UserController)
-   [ ] Adicionar validação de CPF único
-   [ ] Implementar upload de fotos de perfil

### 3. Gestão de Cursos e Disciplinas

-   [ ] Implementar CRUD para Cursos (CourseController)
-   [ ] Implementar CRUD para Disciplinas (SubjectController)
-   [ ] Implementar associação Curso-Disciplina (CourseSubject)
-   [ ] Implementar listagem de disciplinas por curso

### 4. Gestão de Classes

-   [ ] Implementar CRUD para Classes (ClassController)
-   [ ] Implementar associação Classe-Disciplina-Professor (ClassDisciplineTeacher)
-   [ ] Implementar matrícula de alunos em classes
-   [ ] Adicionar validação de conflitos de horário

### 5. Sistema de Notas e Frequência

-   [ ] Implementar CRUD para Notas (NoteController)
-   [ ] Implementar CRUD para Frequência (FrequencyController)
-   [ ] Implementar cálculo de médias
-   [ ] Implementar relatórios de desempenho
-   [ ] Adicionar validação de notas (0-10)

### 6. Sistema de Conteúdos

-   [ ] Implementar CRUD para Conteúdos (ContentController)
-   [ ] Implementar CRUD para Respostas de Conteúdo (ContentResponseController)
-   [ ] Implementar upload de arquivos
-   [ ] Adicionar tipos de conteúdo (texto, vídeo, PDF)

### 7. Interface Frontend

-   [ ] Criar layout base com header/footer
-   [ ] Implementar dashboard para cada tipo de usuário
-   [ ] Criar formulários para CRUD de todas as entidades
-   [ ] Implementar tabelas de listagem com paginação
-   [ ] Adicionar navegação responsiva
-   [ ] Implementar modais para ações rápidas
-   [ ] Criar páginas de perfil para usuários

### 8. Rotas e Navegação

-   [ ] Completar rotas web para todas as funcionalidades
-   [ ] Organizar rotas por prefixos (admin, student, teacher)
-   [ ] Implementar breadcrumbs
-   [ ] Adicionar proteção de rotas por role

### 9. Validação e Segurança

-   [ ] Implementar Form Requests para todas as operações
-   [ ] Adicionar validação de entrada em todos os controllers
-   [ ] Implementar sanitização de dados
-   [ ] Adicionar proteção CSRF
-   [ ] Implementar rate limiting

### 10. Testes

-   [ ] Criar testes unitários para Services
-   [ ] Criar testes de integração para Controllers
-   [ ] Criar testes de feature para rotas
-   [ ] Implementar testes de API
-   [ ] Adicionar testes para validações

### 11. Migração do Sistema Legado

-   [ ] Analisar estrutura do banco legado (backup/)
-   [ ] Criar script de migração de dados
-   [ ] Migrar usuários existentes
-   [ ] Migrar dados de cursos, classes, notas
-   [ ] Testar compatibilidade de dados

### 12. Configuração e Deploy

-   [ ] Configurar ambiente de desenvolvimento (Docker/Sail)
-   [ ] Configurar CI/CD
-   [ ] Implementar logging adequado
-   [ ] Configurar cache e otimização
-   [ ] Preparar documentação de deploy

### 13. Melhorias Gerais

-   [ ] Implementar internacionalização (PT-BR)
-   [ ] Adicionar notificações por email
-   [ ] Implementar busca global
-   [ ] Adicionar filtros e ordenação em listagens
-   [ ] Implementar tema dark/light
-   [ ] Adicionar gráficos e estatísticas no dashboard

### 14. Documentação

-   [ ] Criar documentação da API
-   [ ] Documentar funcionalidades do sistema
-   [ ] Criar guia de usuário
-   [ ] Documentar processo de migração

## Prioridades

1. **Alta**: Completar autenticação e CRUD básico
2. **Média**: Implementar interface frontend completa
3. **Baixa**: Melhorias de UX e migração do legado

## Notas

-   O sistema legado está localizado na pasta `backup/`
-   Usar DTOs para transferência de dados
-   Seguir padrões de arquitetura (Repository/Service)
-   Manter consistência com Laravel conventions</content>
    <parameter name="filePath">c:\projects\redac\todo.md
