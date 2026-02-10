# TODO - Projeto REDAC (Sistema de Gerenciamento Escolar)

## Visao Geral

Este projeto e um sistema de gerenciamento escolar em Laravel para substituir um sistema legado em PHP puro. Inclui funcionalidades para alunos, professores, secretaria, cursos, disciplinas, turmas, notas, frequencia e conteudos.

## Status Atual (06/02/2026)

- [x] Estrutura Laravel configurada
- [x] Models Teacher, Secretary, Course, Subject, Room (turmas), Note, Frequency, Content, ContentResponse, CourseSubject, RoomDisciplineTeacher
- [x] Repositories implementados para User, Student, Teacher, Secretary, Course, Subject, Room, CourseSubject, RoomDisciplineTeacher
- [x] Services implementados para User, Student, Teacher, Secretary, Course, Subject, Room, CourseSubject, RoomDisciplineTeacher
- [x] Controllers criados para Student, Teacher, Secretary (CRUD via API)
- [x] Controllers criados para Course, Subject, Room, CourseSubject, RoomDisciplineTeacher (parcial, sem rotas expostas)
- [x] Autenticacao web basica (login/logout) implementada
- [x] Views basicas: login, register, dashboards (student, teacher, secretary), feed/profile do aluno, componentes de layout
- [x] Middlewares de roles implementados (EnsureIsAdmin, EnsureIsSecretary, EnsureIsTeacher, EnsureIsStudent)
- [x] DTOs criados para Student, Teacher, Secretary, Course, Subject, Room, CourseSubject, RoomDisciplineTeacher

## TODOs Pendentes

### 1. Autenticacao e Autorizacao

- [x] Login e logout web
- [ ] Expor rotas web para register e logout (e fluxo completo de registro)
- [ ] Implementar recuperacao de senha
- [ ] Implementar autenticacao via API (JWT ou Sanctum)
- [ ] Aplicar middlewares de roles nas rotas e definir regras de acesso por perfil

### 2. CRUD de Usuarios

- [x] CRUD completo para Alunos (StudentController) via API
- [x] CRUD completo para Professores (TeacherController) via API
- [x] CRUD completo para Secretaria (SecretaryController) via API
- [ ] CRUD completo para Usuarios (UserController)
- [x] Validacao de CPF unico no banco (migrations com unique)
- [ ] Implementar upload de fotos de perfil

### 3. Gestao de Cursos e Disciplinas

- [x] CourseController com findAll, find, store, updateAllData, active, desactive
- [x] SubjectController com index, store, update
- [x] Associacao Curso-Disciplina (CourseSubject) com controller/service/repo
- [ ] Expor rotas API para Course, Subject e CourseSubject
- [ ] Adicionar endpoints faltantes em Subject (show, delete, active/desactive se necessario)

### 4. Gestao de Turmas (Room)

- [x] RoomController com index, show, store, active, desactive
- [x] Associacao Turma-Disciplina-Professor (RoomDisciplineTeacher) com controller/service/repo
- [ ] Expor rotas API para Room e RoomDisciplineTeacher
- [ ] Adicionar update de turma (Room) e validacao de conflitos de horario
- [ ] Implementar matricula de alunos em turmas

### 5. Sistema de Notas e Frequencia

- [x] Models e Migrations para Note e Frequency
- [ ] Criar Services/Repositories/DTOs para Note e Frequency
- [ ] Criar Controllers e rotas API para Note e Frequency
- [ ] Implementar calculo de medias
- [ ] Implementar relatorios de desempenho
- [ ] Adicionar validacao de notas (0-10)

### 6. Sistema de Conteudos

- [x] Models e Migrations para Content e ContentResponse
- [ ] Criar Services/Repositories/DTOs para Content e ContentResponse
- [ ] Criar Controllers e rotas API para Content e ContentResponse
- [ ] Implementar upload de arquivos
- [ ] Adicionar tipos de conteudo (texto, video, PDF)

### 7. Interface Frontend

- [x] Componentes base de layout e formularios
- [x] Paginas basicas de login, register e dashboards
- [ ] Criar layout base completo com header/footer e navegacao consistente
- [ ] Implementar CRUDs no frontend (formularios e listagens)
- [ ] Implementar tabelas com paginacao, filtros e ordenacao
- [ ] Adicionar navegacao responsiva e modais para acoes rapidas
- [ ] Criar paginas de perfil completas para usuarios

### 8. Rotas e Navegacao

- [x] Rotas API para Professores, Secretaria e Alunos
- [ ] Rotas API para Cursos, Disciplinas, Turmas, CourseSubject e RoomDisciplineTeacher
- [ ] Completar rotas web (register, logout, home/secretary, etc.)
- [ ] Organizar rotas por prefixos (admin, student, teacher) e aplicar middlewares
- [ ] Implementar breadcrumbs

### 9. Validacao e Seguranca

- [x] Form Requests para criacao/atualizacao de Student, Teacher, Secretary, Course, Subject, Room
- [ ] Form Requests para demais entidades e endpoints (Note, Frequency, Content, associacoes, etc.)
- [ ] Implementar sanitizacao de dados
- [ ] Implementar rate limiting

### 10. Testes

- [ ] Criar testes unitarios para Services
- [ ] Criar testes de integracao para Controllers
- [ ] Criar testes de feature para rotas
- [ ] Implementar testes de API
- [ ] Adicionar testes para validacoes

### 11. Migracao do Sistema Legado

- [ ] Analisar estrutura do banco legado (backup/)
- [ ] Criar script de migracao de dados
- [ ] Migrar usuarios existentes
- [ ] Migrar dados de cursos, turmas e notas
- [ ] Testar compatibilidade de dados

### 12. Configuracao e Deploy

- [ ] Configurar ambiente de desenvolvimento (Docker/Sail)
- [ ] Configurar CI/CD
- [ ] Implementar logging adequado
- [ ] Configurar cache e otimizacao
- [ ] Preparar documentacao de deploy

### 13. Melhorias Gerais

- [ ] Implementar internacionalizacao (PT-BR)
- [ ] Adicionar notificacoes por email
- [ ] Implementar busca global
- [ ] Implementar tema dark/light
- [ ] Adicionar graficos e estatisticas no dashboard

### 14. Documentacao

- [ ] Criar documentacao da API
- [ ] Documentar funcionalidades do sistema
- [ ] Criar guia de usuario
- [ ] Documentar processo de migracao

## Prioridades (Sugeridas)

1. **Alta**: Expor rotas API para Course/Subject/Room e associacoes, concluir endpoints faltantes (update de turma, show/delete de subject), aplicar middlewares de roles, organizar rotas por prefixo
2. **Media**: CRUDs completos de notas/frequencia/conteudos, interface frontend para CRUDs, validacoes faltantes
3. **Baixa**: Melhorias de UX, testes extensivos, migracao do legado, CI/CD e documentacao

## Notas

- O sistema legado esta localizado na pasta `backup/`
- API ja possui controllers e services para varias entidades, mas faltam rotas publicadas e middlewares aplicados
- Manter consistencia com Laravel conventions e padroes Repository/Service
