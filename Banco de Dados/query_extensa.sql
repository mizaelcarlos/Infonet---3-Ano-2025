SELECT
    a.id_aluno,
    a.nome_completo AS nome_do_aluno,
    a.data_nascimento,
    a.genero,
    a.endereco,
    a.cidade,
    a.estado,
    a.telefone,
    a.email,

    t.id_turma,
    t.nome_turma,
    t.ano_letivo,
    t.turno,

    p.id_professor,
    p.nome_completo AS nome_do_professor,
    p.email AS email_professor,
    p.disciplina_principal,

    d.id_disciplina,
    d.nome_disciplina,
    d.carga_horaria,

    n.id_nota,
    n.valor_nota,
    n.tipo_avaliacao,
    n.data_avaliacao,

    f.id_frequencia,
    f.data_presenca,
    f.status_presenca,

    CASE
        WHEN n.valor_nota >= 7 THEN 'Aprovado'
        WHEN n.valor_nota >= 5 THEN 'Recuperação'
        ELSE 'Reprovado'
    END AS situacao_do_aluno,

    (
        SELECT AVG(n2.valor_nota)
        FROM notas n2
        WHERE n2.id_aluno = a.id_aluno
          AND n2.id_disciplina = d.id_disciplina
    ) AS media_por_disciplina,

    (
        SELECT COUNT(*)
        FROM frequencias f2
        WHERE f2.id_aluno = a.id_aluno
          AND f2.status_presenca = 'Faltou'
    ) AS total_faltas

FROM alunos a
INNER JOIN turmas t ON a.id_turma = t.id_turma
INNER JOIN matriculas m ON a.id_aluno = m.id_aluno
INNER JOIN disciplinas d ON m.id_disciplina = d.id_disciplina
INNER JOIN professores p ON d.id_professor_responsavel = p.id_professor
LEFT JOIN notas n ON a.id_aluno = n.id_aluno AND n.id_disciplina = d.id_disciplina
LEFT JOIN frequencias f ON a.id_aluno = f.id_aluno AND f.id_disciplina = d.id_disciplina

WHERE t.ano_letivo = 2025
  AND d.nome_disciplina LIKE '%Matemática%'
  AND a.estado = 'São Paulo'

ORDER BY
    a.nome_completo ASC,
    d.nome_disciplina ASC,
    n.data_avaliacao DESC;
