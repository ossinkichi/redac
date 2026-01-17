# TODO - Projeto REDAC (Sistema de Gerenciamento Escolar)

## Visão Geral

Este projeto é um sistema de gerenciamento escolar desenvolvido em Laravel, visando substituir um sistema legado em PHP puro. Inclui funcionalidades para alunos, professores, secretária, cursos, classes, notas, frequência e conteúdos.

## Status Atual

- ✅ Estrutura Laravel configurada
- ✅ Models e Migrations criadas para todas as entidades principais (User, Student, Teacher, Secretary, Course, Subject, Class, Note, Frequency, Content, etc.)
- ✅ Repositories implementados (Student, Teacher, Secretary, User, Course, Class)
- ✅ Services implementados (Student, Teacher, Secretary, User)
- ✅ Controllers criados (TeacherController com CRUD completo, StudentController parcial, SecretaryController quase completo, UserController com autenticação)
- ✅ Autenticação básica (login, logout) implementada
- ✅ API básica implementada com rotas para Professores e Secretária
- ✅ Views básicas (login, register, home)
- ✅ Middlewares para roles implementados (EnsureIsAdmin, EnsureIsSecretary, EnsureIsTeacher)
- ✅ DTOs criados para criação e atualização de entidades

## TODOs Pendentes

### 1. Autenticação e Autorização

- [ ] Completar implementação do registro de usuários (UserController::AuthenticateRegister)
- [ ] Implementar logout completo
- [ ] Adicionar middleware para proteção de rotas
- [ ] Implementar recuperação de senha
- [ ] Adicionar roles e permissões (admin, professor, aluno, secretária)
- [ ] Implementar autenticação via API (JWT ou Sanctum)

### 2. CRUD de Usuários

- [ ] Implementar CRUD completo para Alunos (StudentController) - Controller criado, mas métodos precisam ser implementados
- [x] Implementar CRUD completo para Professores (TeacherController) - ✅ CRUD completo via API (findAll, find, newTeacher, update, desactive, active)
- [ ] Implementar CRUD completo para Secretária (SecretaryController) - Controller criado, métodos básicos implementados
- [ ] Implementar CRUD completo para Usuários (UserController) - Controller criado, login implementado
- [ ] Adicionar validação de CPF único
- [ ] Implementar upload de fotos de perfil

### 3. Gestão de Cursos e Disciplinas

- [ ] Implementar CRUD para Cursos (CourseController)
- [ ] Implementar CRUD para Disciplinas (SubjectController)
- [ ] Implementar associação Curso-Disciplina (CourseSubject)
- [ ] Implementar listagem de disciplinas por curso

### 4. Gestão de Classes

- [ ] Implementar CRUD para Classes (ClassController)
- [ ] Implementar associação Classe-Disciplina-Professor (ClassDisciplineTeacher)
- [ ] Implementar matrícula de alunos em classes
- [ ] Adicionar validação de conflitos de horário

### 5. Sistema de Notas e Frequência

- [ ] Implementar CRUD para Notas (NoteController)
- [ ] Implementar CRUD para Frequência (FrequencyController)
- [ ] Implementar cálculo de médias
- [ ] Implementar relatórios de desempenho
- [ ] Adicionar validação de notas (0-10)

### 6. Sistema de Conteúdos

- [ ] Implementar CRUD para Conteúdos (ContentController)
- [ ] Implementar CRUD para Respostas de Conteúdo (ContentResponseController)
- [ ] Implementar upload de arquivos
- [ ] Adicionar tipos de conteúdo (texto, vídeo, PDF)

### 7. Interface Frontend

- [ ] Criar layout base com header/footer
- [ ] Implementar dashboard para cada tipo de usuário
- [ ] Criar formulários para CRUD de todas as entidades
- [ ] Implementar tabelas de listagem com paginação
- [ ] Adicionar navegação responsiva
- [ ] Implementar modais para ações rápidas
- [ ] Criar páginas de perfil para usuários

### 8. Rotas e Navegação

- [x] Implementar rotas API para Professores (findAll, find, create, update, desactive, active)
- [x] Implementar rotas API para Secretária (find, update, create, desactive, active)
- [ ] Completar rotas web para todas as funcionalidades
- [ ] Organizar rotas por prefixos (admin, student, teacher)
- [ ] Implementar breadcrumbs
- [ ] Adicionar proteção de rotas por role

### 9. Validação e Segurança

- [ ] Implementar Form Requests para todas as operações
- [ ] Adicionar validação de entrada em todos os controllers
- [ ] Implementar sanitização de dados
- [ ] Adicionar proteção CSRF
- [ ] Implementar rate limiting

### 10. Testes

- [ ] Criar testes unitários para Services
- [ ] Criar testes de integração para Controllers
- [ ] Criar testes de feature para rotas
- [ ] Implementar testes de API
- [ ] Adicionar testes para validações

### 11. Migração do Sistema Legado

- [ ] Analisar estrutura do banco legado (backup/)
- [ ] Criar script de migração de dados
- [ ] Migrar usuários existentes
- [ ] Migrar dados de cursos, classes, notas
- [ ] Testar compatibilidade de dados

### 12. Configuração e Deploy

- [ ] Configurar ambiente de desenvolvimento (Docker/Sail)
- [ ] Configurar CI/CD
- [ ] Implementar logging adequado
- [ ] Configurar cache e otimização
- [ ] Preparar documentação de deploy

### 13. Melhorias Gerais

- [ ] Implementar internacionalização (PT-BR)
- [ ] Adicionar notificações por email
- [ ] Implementar busca global
- [ ] Adicionar filtros e ordenação em listagens
- [ ] Implementar tema dark/light
- [ ] Adicionar gráficos e estatísticas no dashboard

### 14. Documentação

- [ ] Criar documentação da API
- [ ] Documentar funcionalidades do sistema
- [ ] Criar guia de usuário
- [ ] Documentar processo de migração

## Prioridades

1. **Alta**: Completar CRUD para Alunos e Secretária, implementar rotas web
2. **Média**: Implementar interface frontend completa, gestão de cursos/disciplinas
3. **Baixa**: Melhorias de UX, testes, migração do legado

## Notas

- O sistema legado está localizado na pasta `backup/`
- API implementada com middleware para roles (secretary, teacher, admin)
- Usar DTOs para transferência de dados
- Seguir padrões de arquitetura (Repository/Service)
- Manter consistência com Laravel conventions
- Próximo foco: Completar StudentController e implementar views para CRUD</content>
  <parameter name="filePath">c:\projects\redac\todo.md
