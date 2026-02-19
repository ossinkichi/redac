# TODO - Projeto REDAC (Sistema de Gerenciamento Escolar)

## Como usar este TODO

- Marque tarefas como concluídas editando as caixas de seleção (`- [x]`).
- Use a seção **Tarefas por Prioridade** para focar na ordem sugerida.
- Abra as seções abaixo para ver tarefas por área.

## Visão Geral

Sistema escolar em Laravel com arquitetura em camadas (Controllers → Services → Repositories). Substitui o sistema legado em PHP. Desenvolvimento contínuo com foco em rotas API, middlewares e frontend.

---

## Status Atual (18/02/2026)

**Backend:**

- [x] Estrutura Laravel com Models, Migrations, Seeders configurados
- [x] Todas as 12 Models criadas: User, Student, Teacher, Secretary, Course, Subject, Room, CourseSubject, RoomDisciplineTeacher, Note, Frequency, Content, ContentResponse
- [x] Repositories para 9 entidades: User, Student, Teacher, Secretary, Course, Subject, Room, CourseSubject, RoomDisciplineTeacher
- [ ] Repositories para 4 entidades: Note, Frequency, Content, ContentResponse
- [x] Services para 9 entidades + ClassDisciplineTeacher
- [ ] Services para Note, Frequency, Content, ContentResponse
- [x] DTOs para 9 entidades principais
- [ ] DTOs para Note, Frequency, Content, ContentResponse
- [x] Controllers com CRUDs: Student, Teacher, Secretary (rotas expostas)
- [x] Controllers criados: Course, Subject, Room, CourseSubject, RoomDisciplineTeacher (SEM rotas expostas)
- [ ] Controllers para Note, Frequency, Content, ContentResponse

**Autenticação:**

- [x] Login web implementado
- [ ] Logout web funcional (rota existe, mas precisa teste)
- [ ] Register web completo
- [ ] Recuperação de senha
- [ ] API Tokens (Sanctum)

**Frontend:**

- [x] Componentes base de layout
- [x] Páginas: login, dashboards (student/teacher/secretary), feed/profile
- [ ] Layout completo com navegação e header/footer
- [ ] CRUDs no frontend (tabelas, formulários, listagens)
- [ ] Tabelas com paginação e filtros

**Rotas & Middlewares:**

- [x] Middlewares de roles criados: Admin, Secretary, Teacher, Student
- [ ] Rotas API expostas para Course, Subject, Room, CourseSubject, RoomDisciplineTeacher
- [ ] Middlewares aplicados nas rotas
- [ ] Rotas web completas (register, logout, dashboards)
- [ ] Organização de rotas por prefixo (admin/, teacher/, secretary/, student/)



---

## Tarefas por Prioridade

### 🔴 P1 - Expor Rotas API Faltantes

- [ ] Expor rotas API para Course (CourseController já existe)
- [ ] Expor rotas API para Subject (SubjectController já existe)
- [ ] Expor rotas API para Room (RoomController já existe)
- [ ] Expor rotas API para CourseSubject (Controller já existe)
- [ ] Expor rotas API para RoomDisciplineTeacher (Controller já existe)
- [ ] Adicionar endpoints faltantes em Subject (show, delete, active/desactive)
- [ ] Adicionar método update em Room
- [ ] Aplicar middlewares de roles nas rotas API
- [ ] Organizar rotas por prefixos (admin/, teacher/, secretary/, student/)

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
- [ ] Implementar relatórios de desempenho
- [ ] Sistema de permissões granular

---

## Estrutura do Projeto

```
app/
├── Models/              ✓ (12 models criadas)
├── Controllers/         ✓ (5 controllers com rotas, 5 sem rotas)
├── Services/           ✓ (9 services criadas)
├── Repositories/       ✓ (9 repositories; faltam Note, Frequency, Content, ContentResponse)
├── Dtos/               ✓ (9 DTOs; faltam Note, Frequency, Content, ContentResponse)
├── Http/
│   ├── Requests/       (LoginRequest, CreateRoomDisciplineTeacherRequest; faltam outros)
│   ├── Resources/
│   └── Middleware/     ✓ (Roles: Admin, Secretary, Teacher, Student)
└── View/Components/    ✓ (Componentes base de layout)

database/
├── migrations/         ✓ (Tables para todas as Models)
└── seeders/            (Database seeder)

resources/
├── css/
├── js/
└── views/              ✓ (login, dashboards, feed, components)

routes/
├── api.php             (Rotas para Student, Teacher, Secretary)
├── web.php             (Login, rotas web gerais)
└── console.php
```

---

## Notas Importantes

- Estrutura em camadas: Controller → Service → Repository → Model
- Padrão DTO para transferência de dados
- Middlewares de roles implementados, mas não aplicados nas rotas
- Controllers para Course/Subject/Room/CourseSubject/RoomDisciplineTeacher existem, mas sem rotas publicadas
- Models Note e Frequency já possuem migrations, mas faltam as demais camadas
- Sistema legado em `backup/` para possível migração futura
- Frontend em Vue.js (Inertia) - verificar se está sendo usado

---

## Links Úteis

- [README.md](README.md)
- [routes/api.php](routes/api.php)
- [routes/web.php](routes/web.php)
- [app/Models](app/Models)
- [app/Http/Controllers](app/Http/Controllers)
- [app/Services](app/Services)
- [app/Repositories](app/Repositories)
- [docker-compose.yml](docker-compose.yml)
- [ ] Recuperação de senha
- [ ] Autenticação via API (JWT ou Sanctum)
- [ ] Aplicar middlewares de roles nas rotas (middlewares existem, mas não estão aplicados)

</details>

<details>
<summary>2. CRUD de Usuários 👥</summary>

- [x] CRUD completo para Alunos (StudentController) via API
- [x] CRUD completo para Professores (TeacherController) via API
- [x] CRUD completo para Secretaria (SecretaryController) via API
- [ ] CRUD completo para Usuários (UserController)
- [x] Validação de CPF único no banco
- [ ] Implementar upload de fotos de perfil

</details>

<details>
<summary>3. Cursos e Disciplinas 📚</summary>

- [x] CourseController com findAll, find, store, updateAllData, active, desactive
- [x] SubjectController com index, store, update
- [x] Associação Curso-Disciplina (CourseSubject) com Controller/Service/Repository
- [ ] Expor rotas API para Course, Subject e CourseSubject
- [ ] Adicionar endpoints faltantes em Subject (show, delete)
- [ ] Criar Form Requests para Course, Subject e CourseSubject
- [ ] Aplicar middlewares nas rotas

</details>

<details>
<summary>4. Turmas (Room) 🏫</summary>

- [x] RoomController com index, show, store, active, desactive
- [x] Associação Turma-Disciplina-Professor (RoomDisciplineTeacher) com Controller/Service/Repository
- [ ] Expor rotas API para Room e RoomDisciplineTeacher
- [ ] Criar Form Requests para Room e RoomDisciplineTeacher
- [ ] Adicionar método update para turema e validação de conflitos de horário
- [ ] Implementar matrícula de alunos em turmas
- [ ] Aplicar middlewares nas rotas

</details>

<details>
<summary>5. Notas e Frequência 📝</summary>
 para Note e Frequency
- [ ] Criar Repositories para Note e Frequency
- [ ] Criar DTOs para Note e Frequency
- [ ] Criar Controllers para Note e Frequency
- [ ] Expor rotas API para Note e Frequency
- [ ] Criar Form Requests e Frequency
- [ ] Criar Services/Repositories/DTOs para Note e Frequency
- [ ] Criar Controllers e rotas API para Note e Frequency
- [ ] Implementar cálculo de médias
- [ ] Implementar relatórios de desempenho
- [ ] Validar notas (0-10)

</details>

<details> para Content e ContentResponse
- [ ] Criar Repositories para Content e ContentResponse
- [ ] Criar DTOs para Content e ContentResponse
- [ ] Criar Controllers para Content e ContentResponse
- [ ] Expor rotas API para Content e ContentResponse
- [ ] Criar Form Requests

- [x] Models e Migrations para Content e ContentResponse
- [ ] Criar Services/Repositories/DTOs para Content e ContentResponse
- [ ] Criar Controllers e rotas API para Content e ContentResponse
- [ ] Implementar upload de arquivos
- [ ] Adicionar tipos de conteúdo (texto, vídeo, PDF)

</details>

<details>
<summary>7. Frontend & UI 🎨</summary>

- [x] Componentes base de layout e formulários
- [x] Páginas básicas de login, register e dashboards
- [ ] Criar layout base completo com header/footer e navegação
- [ ] Implementar CRUDs no frontend
- [ ] Tabelas com paginação, filtros e ordenação
- [ ] Navegação responsiva e modais

</details>

<details>
<summary>8. Rotas e Navegação 🔗</summary>

- [x] Rotas API para Professores, Secretaria e Alunos (com endpoints completos)
- [ ] Rotas API para Cursos, Disciplinas, Turmas, CourseSubject e RoomDisciplineTeacher (controllers existem)
- [ ] Completar rotas web (register, logout funcional, home/secretary, etc.)
- [ ] Organizar rotas por prefixos (admin, student, teacher, secretary) e aplicar middlewares de roles
- [ ] Implementar breadcrumbs

</details>

<details>
<summary>9. Validação e Segurança 🔒</summary>

- [x] Form Requests para Student, Teacher, Secretary (via LoginRequest e controllers)
- [ ] Form Requests para Course, Subject, Room, CourseSubject, RoomDisciplineTeacher
- [ ] Form Requests para Note, Frequency, Content, ContentResponse
- [ ] Implementar sanitização de dados
- [ ] Implementar rate limiting

</details>

<details>
<summary>10. Testes ✅</summary>

- [ ] Testes unitários para Services
- [ ] Testes de integração para Controllers
- [ ] Testes de feature para rotas
- [ ] Testes de API

</details>

<details>
<summary>11. Migração do legado 🗄️</summary>

- [ ] Analisar estrutura do banco legado (`backup/`)
- [ ] Criar script de migração de dados
- [ ] Migrar usuários, cursos, turmas e notas

</details>

<details>
<summary>12. Deploy & Infra 🛠️</summary>

- [ ] Configurar Docker/Sail
- [ ] Configurar CI/CD
- [ ] Implementar logging e cache
- [ ] Documentar processo de deploy

</details>

<details>
<summary>13. Melhorias gerais ✨</summary>

- [ ] Internacionalização (PT-BR)
- [ ] Notificações por email
- [ ] Busca global
- [ ] Tema dark/light
- [ ] Gráficos e estatísticas

</details>

<details>
<summary>14. Documentação 📘</summary>

- [ ] Documentação da API
- [ ] Documentar funcionalidades do sistema
- [ ] Guia do usuário
- [ ] Documentar processo de migração

</details>

---

## Prioridades (sugestão rápida)

1. **Alta** — Expor rotas API para Course/Subject/Room e associações (controllers existem); aplicar middlewares de roles nas rotas; criar Form Requests faltantes
2. **Média** — Services/Repositories/DTOs/Controllers para Note, Frequency, Content; implementar CRUDs de notas/frequência/conteúdos + frontend
3. **Baixa** — Testes extensivos, migração do legado, CI/CD e documentação

## Links úteis

- [README.md](README.md)
- [routes/](routes/)
- [app/](app/)
- [database/migrations](database/migrations)
- [docker-compose.yml](docker-compose.yml)

### 1. Autenticação e Autorização

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
