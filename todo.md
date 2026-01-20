# TODO - Projeto REDAC (Sistema de Gerenciamento Escolar)

## Visão Geral

Este projeto é um sistema de gerenciamento escolar desenvolvido em Laravel, visando substituir um sistema legado em PHP puro. Inclui funcionalidades para alunos, professores, secretária, cursos, classes, notas, frequência e conteúdos.

## Status Atual

- ✅ Estrutura Laravel configurada
- ✅ Models e Migrations criadas para todas as entidades principais (User, Student, Teacher, Secretary, Course, Subject, Class, Note, Frequency, Content, etc.)
- ✅ Repositories implementados (Student, Teacher, Secretary, User, Course, Class)
- ✅ Services implementados (Student, Teacher, Secretary, User, Course, Class)
- ✅ Controllers criados (TeacherController com CRUD completo via API, StudentController com CRUD completo via API, SecretaryController com CRUD via API, UserController com autenticação, CourseController parcialmente implementado, ClassController parcialmente implementado)
- ✅ Autenticação básica (login, logout) implementada
- ✅ API implementada com rotas para Professores, Secretária, Alunos e parcialmente para Cursos e Classes
- ✅ Views básicas (login, register, home, welcome)
- ✅ Middlewares para roles implementados (EnsureIsAdmin, EnsureIsSecretary, EnsureIsTeacher, EnsureIsStudent)
- ✅ DTOs criados para criação e atualização de entidades

## TODOs Pendentes

### 1. Autenticação e Autorização

- [x] Completar implementação do registro de usuários (UserController::register)
- [x] Implementar logout completo
- [x] Adicionar middleware para proteção de rotas
- [ ] Implementar recuperação de senha
- [x] Adicionar roles e permissões (admin, professor, aluno, secretária)
- [ ] Implementar autenticação via API (JWT ou Sanctum)

### 2. CRUD de Usuários

- [x] Implementar CRUD completo para Alunos (StudentController) - ✅ CRUD completo via API (findAll, find, register, updateAllData, simpleUpdate, active, desactive, formed)
- [x] Implementar CRUD completo para Professores (TeacherController) - ✅ CRUD completo via API (findAll, find, newTeacher, update, desactive, active)
- [x] Implementar CRUD completo para Secretária (SecretaryController) - ✅ CRUD via API (findAll, find, create, update, desactive, active)
- [ ] Implementar CRUD completo para Usuários (UserController) - adicionar métodos além de login (register, update, delete)
- [ ] Adicionar validação de CPF único
- [ ] Implementar upload de fotos de perfil

### 3. Gestão de Cursos e Disciplinas

- [ ] Implementar CRUD completo para Cursos (CourseController) - findAll e find implementados, adicionar register, updateAllData e outros métodos
- [ ] Criar SubjectController e implementar CRUD para Disciplinas
- [ ] Implementar associação Curso-Disciplina (CourseSubject)
- [ ] Implementar listagem de disciplinas por curso

### 4. Gestão de Classes

- [ ] Implementar CRUD completo para Classes (ClassController) - findAll implementado, adicionar find, register, updateAllData
- [ ] Implementar associação Classe-Disciplina-Professor (ClassDisciplineTeacher)
- [ ] Implementar matrícula de alunos em classes
- [ ] Adicionar validação de conflitos de horário

### 5. Sistema de Notas e Frequência

- [ ] Criar NoteController e implementar CRUD para Notas
- [ ] Criar FrequencyController e implementar CRUD para Frequência
- [ ] Implementar cálculo de médias
- [ ] Implementar relatórios de desempenho
- [ ] Adicionar validação de notas (0-10)

### 6. Sistema de Conteúdos

- [ ] Criar ContentController e implementar CRUD para Conteúdos
- [ ] Criar ContentResponseController e implementar CRUD para Respostas de Conteúdo
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
- [x] Implementar rotas API para Secretária (find, update, create, desactive, active, findAll)
- [x] Implementar rotas API para Alunos (findAll, find, create, update, active, desactive, formed, simpleUpdate)
- [ ] Implementar rotas API para Cursos (findAll, find, register, update)
- [ ] Implementar rotas API para Classes (findAll, find, register, update)
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

1. **Alta**: Completar CRUD para CourseController (register, updateAllData), criar SubjectController, completar CRUD para ClassController, implementar rotas API para Cursos e Classes, expandir rotas web
2. **Média**: Implementar interface frontend completa, gestão de classes, notas e frequência
3. **Baixa**: Melhorias de UX, testes, migração do legado

## Notas

- O sistema legado está localizado na pasta `backup/`
- API implementada com middleware para roles (secretary, teacher, admin, student)
- Usar DTOs para transferência de dados
- Seguir padrões de arquitetura (Repository/Service)
- Manter consistência com Laravel conventions
- Próximo foco: Completar CourseController e ClassController, criar SubjectController, implementar rotas API faltantes, expandir views e rotas web</content>
  <parameter name="filePath">c:\projects\redac\todo.md
