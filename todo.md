# TODO - Projeto REDAC (Sistema de Gerenciamento Escolar)

## Como usar este TODO

- Marque tarefas como concluídas editando as caixas de seleção (`- [x]`).
- Use a seção **Ações rápidas** para criar issues via `gh` (quando estiver autenticado).
- Abra as seções abaixo para ver tarefas por área.

## Visão Geral

Este é o TODO central do Projeto REDAC — um sistema escolar em Laravel (substituição do legado em PHP). Contém status, prioridades e ações rápidas para criar issues.

---

## Ações rápidas

Execute localmente (PowerShell/CMD) quando o `gh` CLI estiver autenticado.

```bash
gh issue create --title "Atualizar README e .env-example com instruções de setup" --label "docs,enhancement" --body "Passos: 1) Instalar dependências via Composer\n2) Copiar .env-example para .env e ajustar\n3) Rodar migrations e seeders\nArquivos: README.md, .env-example"
```

```bash
gh issue create --title "Verificar e completar migrations e seeders" --label "backend,bug" --body "Revisar migrations em database/migrations e seeders em database/seeders; garantir rollbacks e seeds para usuários e dados de exemplo."
```

---

## Status Atual (16/02/2026)

- [x] Estrutura Laravel configurada
- [x] Models Teacher, Secretary, Course, Subject, Room (turmas), Note, Frequency, Content, ContentResponse, CourseSubject, RoomDisciplineTeacher
- [x] Repositories implementados para User, Student, Teacher, Secretary, Course, Subject, Room, CourseSubject, RoomDisciplineTeacher
- [x] Services implementados para User, Student, Teacher, Secretary, Course, Subject, Room, CourseSubject, RoomDisciplineTeacher, ClassDisciplineTeacher
- [x] Controllers criados para Student, Teacher, Secretary (CRUD via API com rotas expostas)
- [x] Controllers criados para Course, Subject, Room, CourseSubject, RoomDisciplineTeacher (existem, mas sem rotas expostas)
- [x] Autenticação web básica (login) implementada
- [ ] Logout web implementado (faltam rotas)
- [x] Views básicas: login, dashboards (student, teacher, secretary), feed/profile do aluno, componentes de layout
- [x] Middlewares de roles implementados (EnsureIsAdmin, EnsureIsSecretary, EnsureIsTeacher, EnsureIsStudent)
- [x] DTOs criados para Student, Teacher, Secretary, Course, Subject, Room, CourseSubject, RoomDisciplineTeacher
- [ ] DTOs para Note, Frequency, Content, ContentResponse (não criados)
- [ ] Form Requests para Course, Subject, Room, Content, Frequency, Note (apenas LoginRequest e CreateRoomDisciplineTeacherRequest existem)

---

## TODOs Pendentes (Resumo)

Use os detalhes abaixo para navegar por áreas. Cada seção contém as tarefas principais como checklist.

<details>
<summary>1. Autenticação e Autorização 🔐</summary>

- [x] Login web
- [ ] Register web com fluxo completo
- [ ] Logout web (rota mapeada, mas não funciona corretamente)
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
