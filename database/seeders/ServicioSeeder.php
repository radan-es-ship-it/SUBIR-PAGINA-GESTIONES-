<?php

namespace Database\Seeders;

use App\Models\Servicio;
use Illuminate\Database\Seeder;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $servicios = [
            [
                'titulo' => 'Orientación e Informes Legales por Denuncias',
                'descripcion' => 'Orientación o en su caso informe legal por denuncias contra los funcionarios de la Institución.',
                'descripcion_larga' => "Brindamos orientación especializada y elaboración de informes legales exhaustivos para atender denuncias contra funcionarios de la institución.\n\nNuestro servicio incluye:\n- Análisis detallado de la situación y antecedentes\n- Evaluación de la procedencia legal de denuncias\n- Elaboración de informes técnico-legales\n- Asesoramiento en la respuesta institucional\n- Estrategias de mitigación de riesgos\n- Acompañamiento durante el proceso\n\nProtegemos los intereses de la institución con fundamentos legales sólidos y estrategias efectivas.",
                'icono' => '⚖️',
                'imagen' => 'https://images.unsplash.com/photo-1589829545856-d10d557cf95f?w=800',
                'activo' => true,
                'orden' => 1
            ],
            [
                'titulo' => 'Diseño de Procedimientos de Contratación',
                'descripcion' => 'Diseño de procedimiento de contratación adaptado a las necesidades de su institución.',
                'descripcion_larga' => "Desarrollamos procedimientos de contratación personalizados que garantizan transparencia, eficiencia y cumplimiento normativo.\n\nIncluye:\n- Análisis de necesidades institucionales\n- Diseño de procesos de selección\n- Elaboración de manuales de procedimientos\n- Definición de requisitos y perfiles\n- Establecimiento de etapas de evaluación\n- Formatos y documentación necesaria\n- Capacitación al personal responsable\n\nAseguramos que sus procesos de contratación sean eficientes y cumplan con todas las normativas vigentes.",
                'icono' => '📋',
                'imagen' => 'https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=800',
                'activo' => true,
                'orden' => 2
            ],
            [
                'titulo' => 'Diseño de Sistemas de Trabajo y Atención',
                'descripcion' => 'Diseño de sistemas de trabajo y atención al cliente optimizados para su organización.',
                'descripcion_larga' => "Creamos sistemas de trabajo integrados que mejoran la productividad y optimizan la atención al cliente.\n\nServicios incluidos:\n- Análisis de procesos actuales\n- Diseño de flujos de trabajo eficientes\n- Protocolos de atención al cliente\n- Sistemas de gestión de consultas y reclamos\n- Definición de indicadores de desempeño\n- Implementación de mejoras continuas\n- Capacitación del personal\n\nTransformamos la manera en que su institución opera y atiende a sus clientes.",
                'icono' => '⚙️',
                'imagen' => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=800',
                'activo' => true,
                'orden' => 3
            ],
            [
                'titulo' => 'Defensa Legal Laboral',
                'descripcion' => 'Defensa legal en denuncias y procesos en área laboral con representación especializada.',
                'descripcion_larga' => "Representación legal especializada en procesos y denuncias del área laboral, protegiendo los intereses de su institución.\n\nCobertura completa:\n- Representación en procesos administrativos\n- Defensa en juicios laborales\n- Atención de reclamos y denuncias\n- Negociación de acuerdos\n- Recursos y apelaciones\n- Asesoramiento estratégico integral\n- Seguimiento permanente del caso\n\nContamos con abogados especializados en derecho laboral para garantizar la mejor defensa legal.",
                'icono' => '🛡️',
                'imagen' => 'https://images.unsplash.com/photo-1505664194779-8beaceb93744?w=800',
                'activo' => true,
                'orden' => 4
            ],
            [
                'titulo' => 'Asesoramiento e Informes Legales Laborales',
                'descripcion' => 'Asesoramiento y elaboración de informes de la aplicación de normas legales laborales.',
                'descripcion_larga' => "Asesoramiento profesional y elaboración de informes técnicos sobre la correcta aplicación de normativas laborales.\n\nNuestros servicios:\n- Interpretación de normas laborales vigentes\n- Elaboración de informes técnico-legales\n- Análisis de casos específicos\n- Recomendaciones de cumplimiento\n- Actualización normativa permanente\n- Capacitación en legislación laboral\n- Auditoría de procedimientos\n\nMantenemos su institución actualizada y en cumplimiento con todas las disposiciones legales laborales.",
                'icono' => '📖',
                'imagen' => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=800',
                'activo' => true,
                'orden' => 5
            ],
            [
                'titulo' => 'Mitigación por Infracciones Sociales',
                'descripcion' => 'Mitigación y orientación sobre alcances y efectos de las denuncias por infracción de leyes sociales.',
                'descripcion_larga' => "Orientación especializada para mitigar riesgos y entender los alcances de denuncias por infracciones a leyes sociales.\n\nServicios de mitigación:\n- Análisis de denuncias e infracciones\n- Evaluación de riesgos y consecuencias\n- Estrategias de mitigación\n- Plan de acción correctivo\n- Representación ante autoridades\n- Negociación de soluciones\n- Prevención de futuras infracciones\n\nMinimizamos el impacto de las infracciones y protegemos la reputación institucional.",
                'icono' => '🔍',
                'imagen' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=800',
                'activo' => true,
                'orden' => 6
            ],
            [
                'titulo' => 'Seguridad e Higiene Ocupacional',
                'descripcion' => 'Mitigación y orientación sobre disposiciones de Seguridad e Higiene ocupacional en general.',
                'descripcion_larga' => "Asesoramiento integral en materia de Seguridad e Higiene Ocupacional para garantizar ambientes laborales seguros.\n\nIncluye:\n- Evaluación de condiciones de trabajo\n- Implementación de medidas preventivas\n- Elaboración de protocolos de seguridad\n- Capacitación en prevención de riesgos\n- Cumplimiento de normativas vigentes\n- Auditorías de seguridad\n- Gestión de emergencias\n- Planes de mejora continua\n\nProtegemos la salud de sus trabajadores y aseguramos el cumplimiento de todas las disposiciones legales.",
                'icono' => '🦺',
                'imagen' => 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=800',
                'activo' => true,
                'orden' => 7
            ],
            [
                'titulo' => 'Comités Mixtos y Procedimientos Disciplinarios',
                'descripcion' => 'Asesoramiento y procedimiento para la conformación de Comités Mixtos de despidos, controversias y disciplina.',
                'descripcion_larga' => "Asesoramiento especializado en la conformación y gestión de Comités Mixtos para resolver controversias laborales.\n\nServicios especializados:\n- Conformación de Comités Mixtos\n- Diseño de procedimientos disciplinarios\n- Reglamentación interna\n- Asesoramiento en despidos\n- Mediación de controversias\n- Elaboración de actas y resoluciones\n- Capacitación a integrantes\n- Seguimiento de casos\n\nFacilitamos la resolución justa y legal de conflictos laborales mediante procedimientos transparentes.",
                'icono' => '👥',
                'imagen' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=800',
                'activo' => true,
                'orden' => 8
            ],
            [
                'titulo' => 'Modalidades de Remuneración Salarial',
                'descripcion' => 'Informe legal sobre modalidades de remuneración salarial de acuerdo a las últimas normativas vigentes.',
                'descripcion_larga' => "Informes legales actualizados sobre modalidades de remuneración salarial conforme a las últimas normativas.\n\nNuestro servicio comprende:\n- Análisis de normativas salariales vigentes\n- Modalidades de pago permitidas\n- Estructuras salariales legales\n- Beneficios y compensaciones\n- Cumplimiento tributario\n- Optimización de cargas sociales\n- Informes técnico-legales\n- Asesoramiento personalizado\n\nAseguramos que sus políticas de remuneración cumplan con todas las disposiciones legales actualizadas.",
                'icono' => '💰',
                'imagen' => 'https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=800',
                'activo' => true,
                'orden' => 9
            ],
        ];

        foreach ($servicios as $servicio) {
            Servicio::create($servicio);
        }
    }
}
