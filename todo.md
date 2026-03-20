# TODO - Projeto REDAC (Sistema de Gerenciamento Escolar)

## Como usar este TODO

- Marque tarefas como concluídas editando as caixas de seleção (`- [x]`).
- Use a seção **Tarefas por Prioridade** para focar na ordem sugerida.
- Abra as seções abaixo para ver tarefas por área.

## Visão Geral

Projeto em Laravel com arquitetura em camadas (Controller → Service → Repository).
Substitui um sistema legado; foco atual: expor rotas API, completar camadas para notas/frequência/conteúdos e ajustar autenticação.

---

## Status Atual (15/03/2026)

- [x] Models e Migrations criados para todas as entidades: User, Student, Teacher, Secretary, Course, Subject, Room, CourseSubject, RoomSubjectTeacher, Note, Frequency, Content, ContentResponse.
- [x] Repositories implementados para: User, Student, Teacher, Secretary, Course, Subject, Room, CourseSubject, RoomSubjectTeacher.
- [ ] Repositories pendentes: Note, Frequency, Content, ContentResponse.
- [x] Services implementados para: User, Student, Teacher, Secretary, Course, Subject, Room, CourseSubject, RoomSubjectTeacher.
- [ ] Services pendentes: Note, Frequency, Content, ContentResponse.
- [x] DTOs implementados para as entidades acima (exceto as pendentes).
- [ ] DTOs pendentes: Note, Frequency, Content, ContentResponse.
- [x] Controllers com rotas expostas: Student, Teacher, Secretary (endereços em `routes/api.php`).
- [x] Controllers existentes (sem rotas publicadas): Course, Subject, Room, CourseSubject, RoomSubjectTeacher.
- [ ] Controllers faltantes: Note, Frequency, Content, ContentResponse.

**Autenticação:**

- [x] Login web funcionando (`resources/views/login.blade.php`).
- [ ] Logout web: rota existe mas precisa testes/ajustes.
- [ ] Registro web ainda não completado.
- [ ] Recuperação de senha pendente.
- [ ] Autenticação via API (Sanctum/JWT) ainda não implementada.

**Frontend:**

- [x] Componentes base de layout e formulários estão em `resources/views/components`.
- [x] Páginas: login, dashboards (student/teacher/secretary), feed, profile já existem.
- [ ] Layout completo com navegação lateral e top bar ainda em construção.
- [ ] CRUDs no frontend (tabelas/formulários) faltam interatividade e integração com API.
- [ ] Tabelas com paginação e filtros não implementadas.

**Rotas & Segurança:**

- [x] Rotas API para Student/Teacher/Secretary publicadas em `routes/api.php`.
- [ ] Rotas API para Course, Subject, Room, CourseSubject, RoomSubjectTeacher precisam ser expostas.
- [x] Middlewares de perfis (admin, secretary, teacher, student) criados e registrados (`bootstrap/app.php`).
- [ ] Organizar rotas por prefixos (admin/, teacher/, secretary/, student/) e aplicar middlewares de roles.
- [ ] Rotas web completas (register, logout, dashboards) ainda incompletas.

---

## Tarefas por Prioridade (próximos passos recomendados)

### 🔴 P1 — Expor e proteger rotas API críticas

- [ ] Publicar rotas REST para Course, Subject, Room, CourseSubject, RoomSubjectTeacher.
- [ ] Adicionar endpoints faltantes em Subject (show, delete, active/desactive).
- [ ] Implementar update de turma (Room).
- [ ] Aplicar middlewares de roles nas rotas de API.
- [ ] Organizar rotas por prefixos e namespaces.

### 🟡 P2 — Completar camadas para Notas, Frequência e Conteúdos

- [ ] Criar Repositories para Note, Frequency, Content, ContentResponse.
- [ ] Criar Services para Note, Frequency, Content, ContentResponse.
- [ ] Criar DTOs para as mesmas entidades.
- [ ] Criar Controllers e rotas API (index, show, store, update, delete).
- [ ] Form Requests e validações específicas (notas 0‑10, conflitos de horário, upload de arquivos).
- [ ] Implementar operações de cálculo de médias e relatórios.

### 🟠 P3 — Autenticação e fluxo web

- [ ] Validar e corrigir rota de logout.
- [ ] Completar fluxo de registro e recuperação de senha (web e API).
- [ ] Implementar tokens API (Sanctum) e documentar uso.
- [ ] Implementar política de autorização (gates/policies) para recursos sensíveis.

### 🔵 P4 — Frontend e UX

- [ ] Concluir layout base com header/footer e navegação responsiva.
- [ ] Implementar CRUDs no frontend conectando com API (tabelas/formulários).
- [ ] Adicionar paginação, filtros e ordenação nas tabelas.
- [ ] Criar modais para ações rápidas (ativar/desativar, editar).
- [ ] Desenvolver páginas de perfil completas para cada tipo de usuário.

### ⚪ P5 — Testes, documentação e deploy

- [ ] Escrever testes unitários para Services.
- [ ] Escrever testes de integração para Controllers.
- [ ] Adicionar testes de feature e validação.
- [ ] Gerar documentação da API (OpenAPI/Swagger ou similar).
- [ ] Preparar ambiente Docker/Sail, CI/CD e documentação de deploy.

### 🔵 P4+ — Validação, segurança e outras operações

- [ ] Form Requests para todas as entidades faltantes (Note, Frequency, Content, etc.).
- [ ] Sanitização de dados e rate limiting.
- [ ] Validar matrícula de alunos em turmas e conflitos de horário.
- [ ] Implementar matrícula de alunos em turmas (backend + frontend).

### 🟣 P5 — Migração do legado e infraestrutura

- [ ] Analisar estrutura do banco legado (`backup/`).
- [ ] Criar scripts de migração de dados e realizar testes.
- [ ] Configurar logging, cache, otimização, e pipeline CI/CD.

### ⚪ P6 — Melhorias Futuras

- [ ] Internacionalização (PT‑BR, possivelmente outros idiomas).
- [ ] Notificações por e‑mail.
- [ ] Busca global no sistema.
- [ ] Tema dark/light.
- [ ] Dashboards com gráficos e estatísticas.

---

## Estrutura rápida (onde procurar código)

- `app/Models` — modelos
- `app/Repositories` — repositórios
- `app/Services` — serviços
- `app/Http/Controllers` — controladores
- `app/Dtos` — DTOs
- `app/Http/Requests` — validações
- `routes/api.php` e `routes/web.php` — rotas

---

Sistema escolar em Laravel com arquitetura em camadas (Controllers → Services → Repositories). Substitui o sistema legado em PHP. Desenvolvimento contínuo com foco em rotas API, middlewares e frontend.

### 🟡 P2 - Implementar Notas, Frequência e Conteúdos

**Notas:**

- [ ] Criar Repository para Note
- [ ] Criar Service para Note
- [ ] Criar DTO para Note
- [ ] Criar Controller para Note (show, index, store, update, delete)
- [ ] Criar Form Requests para Note
- [ ] Expor rotas API para Note
- [ ] Implementar cálculo de médias por disciplina
- [ ] Validar notas (0-10)

**Frequência:**

- [ ] Criar Repository para Frequency
- [ ] Criar Service para Frequency
- [ ] Criar DTO para Frequency
- [ ] Criar Controller para Frequency (show, index, store, update, delete)
- [ ] Criar Form Requests para Frequency
- [ ] Expor rotas API para Frequency

**Conteúdos:**

- [ ] Criar Repository para Content
- [ ] Criar Service para Content
- [ ] Criar DTO para Content
- [ ] Criar Controller para Content (show, index, store, update, delete)
- [ ] Criar Repository para ContentResponse
- [ ] Criar Service para ContentResponse
- [ ] Criar DTO para ContentResponse
- [ ] Criar Controller para ContentResponse (show, index, store, update, delete)
- [ ] Implementar upload de arquivos
- [ ] Adicionar tipos de conteúdo (texto, vídeo, PDF)

### 🟠 P3 - Autenticação e Interface Web

**Autenticação:**

- [ ] Testar e corrigir rota de logout
- [ ] Implementar register web com fluxo completo
- [ ] Implementar recuperação de senha
- [ ] Implementar API Tokens (Sanctum) para endpoints

**Frontend:**

- [ ] Criar layout base completo com header/footer
- [ ] Implementar navegação responsiva
- [ ] Criar tabelas para CRUDs com paginação e filtros
- [ ] Criar formulários para Student, Teacher, Secretary, Course, Subject, Room
- [ ] Criar formulários para Note, Frequency, Content
- [ ] Implementar modais para ações rápidas
- [ ] Criar páginas de perfil completas

### 🔵 P4 - Validação, Testes e Documentação

**Validação e Segurança:**

- [ ] Criar Form Requests para Course, Subject, Room, CourseSubject, RoomDisciplineTeacher
- [ ] Criar Form Requests para Note, Frequency, Content, ContentResponse
- [ ] Implementar sanitização de dados
- [ ] Implementar rate limiting
- [ ] Validar conflitos de horário em turmas
- [ ] Implementar matrícula de alunos em turmas

**Testes:**

- [ ] Criar testes unitários para Services
- [ ] Criar testes de integração para Controllers
- [ ] Criar testes de feature para rotas
- [ ] Criar testes de API
- [ ] Adicionar testes para validações

**Documentação:**

- [ ] Criar documentação da API (OpenAPI/Swagger)
- [ ] Documentar funcionalidades do sistema
- [ ] Criar guia de usuário
- [ ] Documentar padrões e convenções do projeto

### 🟣 P5 - Migração do Legado e Deploy

**Migração:**

- [ ] Analisar estrutura do banco legado (backup/)
- [ ] Criar script de migração de dados
- [ ] Migrar usuários existentes
- [ ] Migrar dados de cursos, turmas e notas
- [ ] Testar compatibilidade de dados

**Deploy & Infra:**

- [ ] Configurar ambiente de desenvolvimento (Docker/Sail)
- [ ] Configurar CI/CD
- [ ] Implementar logging adequado
- [ ] Configurar cache e otimização
- [ ] Preparar documentação de deploy

### ⚪ P6 - Melhorias Futuras

- [ ] Implementar internacionalização (PT-BR)
- [ ] Adicionar notificações por email
- [ ] Implementar busca global
- [ ] Implementar tema dark/light
- [ ] Adicionar gráficos e estatísticas no dashboard
  <details>

# TODO - Projeto REDAC (Sistema de Gerenciamento Escolar)

## Como usar este TODO

- Marque tarefas como concluídas editando as caixas de seleção (`- [x]`).
- Use a seção **Tarefas por Prioridade** para focar nas entregas mais importantes.
- Abra as seções abaixo para ver tarefas por área.

## Visão Geral

Projeto em Laravel com arquitetura em camadas (Controller → Service → Repository). Substitui um sistema legado; foco atual: expor rotas API, completar camadas para notas/frequência/conteúdos e ajustar autenticação.

---

## Status Atual (22/02/2026)

**Resumo rápido:** controllers e models principais existem; repositories/services/DTOs faltantes para Note, Frequency, Content e ContentResponse; rotas API para alunos/professores/secretaria expostas; rotas para Course/Subject/Room ainda precisam ser organizadas e protegidas por middlewares.

**Backend:**

- [x] Models e Migrations principais criados
- [x] Repositories implementados para: User, Student, Teacher, Secretary, Course, Subject, Room, CourseSubject, RoomDisciplineTeacher
- [ ] Repositories faltantes: Note, Frequency, Content, ContentResponse
- [x] Services implementados para várias entidades (9+)
- [ ] Services faltantes: Note, Frequency, Content, ContentResponse
- [x] DTOs implementados para entidades principais
- [ ] DTOs faltantes: Note, Frequency, Content, ContentResponse
- [x] Controllers com rotas expostas: Student, Teacher, Secretary
- [x] Controllers existentes (ainda sem rotas aplicadas): Course, Subject, Room, CourseSubject, RoomDisciplineTeacher
- [ ] Controllers faltantes: Note, Frequency, Content, ContentResponse

**Autenticação:**

- [x] Login web implementado
- [ ] Logout web: rota existe, precisa teste e ajustes
- [ ] Register web: fluxo a completar
- [ ] Recuperação de senha a implementar
- [ ] API Tokens (Sanctum) a validar/implementar

**Frontend:**

- [x] Componentes base e páginas principais (login, dashboards)
- [ ] Layout completo, CRUDs e tabelas (paginação/filtros)

**Rotas & Segurança:**

- [x] Rotas API para Student/Teacher/Secretary publicadas
- [ ] Rotas API para Course/Subject/Room/CourseSubject/RoomDisciplineTeacher precisam ser publicadas e protegidas por middlewares
- [ ] Aplicar middlewares de roles nas rotas (Admin, Secretary, Teacher, Student)

---

## Tarefas por Prioridade (próximos passos recomendados)

### 🔴 P1 — Expor e proteger rotas API críticas

- Expor rotas REST para Course, Subject, Room, CourseSubject e RoomDisciplineTeacher
- Aplicar middlewares de roles e organizar por prefixos (`admin/`, `teacher/`, `secretary/`, `student/`)
- Testar autenticação via Sanctum em endpoints protegidos

### 🟡 P2 — Completar camadas para Notas, Frequência e Conteúdos

- Criar Repositories, Services, DTOs e Controllers para Note, Frequency, Content e ContentResponse
- Criar Form Requests e validações (notas 0-10, conflitos de horário)
- Implementar upload de arquivos e tipos de conteúdo (texto, vídeo, PDF)

### 🟠 P3 — Autenticação e fluxo web

- Corrigir/validar rota de logout
- Implementar registro e recuperação de senha (web + API)
- Habilitar tokens API (Sanctum) e documentar uso

### 🔵 P4 — Frontend e UX

- Implementar layout base com header/footer e navegação responsiva
- Criar tabelas de listagem com paginação/filtros e formulários para CRUDs
- Implementar telas de nota/frequência/conteúdo

### ⚪ P5 — Testes, documentação e deploy

- Adicionar testes unitários para Services e testes de integração para Controllers
- Gerar documentação da API (OpenAPI/Swagger)
- Preparar ambiente Docker/Sail e pipeline CI/CD

---

## Estrutura rápida (onde procurar código)

- `app/Models` — Models principais
- `app/Repositories` — Repositories existentes e faltantes
- `app/Services` — Services implementados
- `app/Http/Controllers` — Controllers (ver quais têm rotas em `routes/api.php`)
- `app/Dtos` — DTOs (completar para Note/Frequency/Content)
- `routes/api.php` e `routes/web.php` — onde publicar rotas

---

## Notas e decisões pendentes

- Confirmar framework frontend (Vue.js/Inertia vs Blade)
- Definir política de versionamento da API e formato de responses
- Validar necessidade de soft deletes e políticas de audit/log

---

Se quiser, eu já começo aplicando as rotas em `routes/api.php` e criando os Form Requests básicos para Note e Frequency — responda "continuar" ou diga qual etapa começar.

- [x] Login e logout web
- [ ] Expor rotas web para register e logout (e fluxo completo de registro)
- [ ] Implementar recuperação de senha
- [ ] Implementar autenticação via API (JWT ou Sanctum)
- [ ] Aplicar middlewares de roles nas rotas e definir regras de acesso por perfil

### 2. CRUD de Usuários

- [x] CRUD completo para Alunos (StudentController) via API
- [x] CRUD completo para Professores (TeacherController) via API
- [x] CRUD completo para Secretaria (SecretaryController) via API
- [ ] CRUD completo para Usuários (UserController)
- [x] Validação de CPF único no banco (migrations com unique)
- [ ] Implementar upload de fotos de perfil

### 3. Gestão de Cursos e Disciplinas

- [x] CourseController com findAll, find, store, updateAllData, active, desactive
- [x] SubjectController com index, store, update
- [x] Associação Curso-Disciplina (CourseSubject) com controller/service/repo
- [ ] Expor rotas API para Course, Subject e CourseSubject
- [ ] Adicionar endpoints faltantes em Subject (show, delete, active/desactive se necessário)

### 4. Gestão de Turmas (Room)

- [x] RoomController com index, show, store, active, desactive
- [x] Associação Turma-Disciplina-Professor (RoomDisciplineTeacher) com controller/service/repo
- [ ] Expor rotas API para Room e RoomDisciplineTeacher
- [ ] Adicionar update de turma (Room) e validação de conflitos de horário
- [ ] Implementar matrícula de alunos em turmas

### 5. Sistema de Notas e Frequência

- [x] Models e Migrations para Note e Frequency
- [ ] Criar Services/Repositories/DTOs para Note e Frequency
- [ ] Criar Controllers e rotas API para Note e Frequency
- [ ] Implementar cálculo de médias
- [ ] Implementar relatórios de desempenho
- [ ] Adicionar validação de notas (0-10)

### 6. Sistema de Conteúdos

- [x] Models e Migrations para Content e ContentResponse
- [ ] Criar Services/Repositories/DTOs para Content e ContentResponse
- [ ] Criar Controllers e rotas API para Content e ContentResponse
- [ ] Implementar upload de arquivos
- [ ] Adicionar tipos de conteúdo (texto, video, PDF)

### 7. Interface Frontend

- [x] Componentes base de layout e formulários
- [x] Páginas básicas de login, register e dashboards
- [ ] Criar layout base completo com header/footer e navegação consistente
- [ ] Implementar CRUDs no frontend (formulários e listagens)
- [ ] Implementar tabelas com paginação, filtros e ordenação
- [ ] Adicionar navegação responsiva e modais para ações rápidas
- [ ] Criar páginas de perfil completas para usuários

### 8. Rotas e Navegação

- [x] Rotas API para Professores, Secretaria e Alunos
- [ ] Rotas API para Cursos, Disciplinas, Turmas, CourseSubject e RoomDisciplineTeacher
- [ ] Completar rotas web (register, logout, home/secretary, etc.)
- [ ] Organizar rotas por prefixos (admin, student, teacher) e aplicar middlewares
- [ ] Implementar breadcrumbs

### 9. Validação e Segurança

- [x] Form Requests para criação/atualização de Student, Teacher, Secretary, Course, Subject, Room
- [ ] Form Requests para demais entidades e endpoints (Note, Frequency, Content, associações, etc.)
- [ ] Implementar sanitização de dados
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
- [ ] Migrar dados de cursos, turmas e notas
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
- [ ] Implementar tema dark/light
- [ ] Adicionar gráficos e estatísticas no dashboard

### 14. Documentação

- [ ] Criar documentação da API
- [ ] Documentar funcionalidades do sistema
- [ ] Criar guia de usuário
- [ ] Documentar processo de migração

## Prioridades (Sugeridas)

1. **Alta**: Expor rotas API para Course/Subject/Room e associações, concluir endpoints faltantes (update de turma, show/delete de subject), aplicar middlewares de roles, organizar rotas por prefixo
2. **Média**: CRUDs completos de notas/frequencia/conteudos, interface frontend para CRUDs, validações faltantes
3. **Baixa**: Melhorias de UX, testes extensivos, migração do legado, CI/CD e documentação

## Notas

- O sistema legado está localizado na pasta `backup/`
- API já possui controllers e services para várias entidades, mas faltam rotas publicadas e middlewares aplicados
- Manter consistência com Laravel conventions e padrões Repository/Service
