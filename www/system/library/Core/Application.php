<?php
/**	\file
 *	FVAL PHP Framework for Web Applications.
 *
 *  \copyright	Copyright (c) 2007-2015 FVAL Consultoria e Informática Ltda.\n
 *  \copyright	Copyright (c) 2007-2015 Fernando Val\n
 *	\copyright Copyright (c) 2014 Allan Marques
 *
 *	\brief		Classe container de dependências de toda aplicação
 *	\warning	Este arquivo é parte integrante do framework e não pode ser omitido
 *	\version	0.2
 *  \author		Allan Marques - allan.marques@ymail.com
 *	\ingroup	framework
 */
namespace FW\Core;

use FW\Container\DIContainer;
use FW\Events\Mediator;

/**
 * \brief Classe container de dependências de toda aplicação.
 */
class Application extends DIContainer
{
    /// Intância compartilhada desta classe.
    protected static $sharedInstance;

    /**
     * \brief Construtor da classe.
     */
    public function __construct()
    {
        parent::__construct();

        $this->bindDefaultDependencies();
    }

    /**
     * \brief Registra um handler de eventos para o evento indicado com a prioridade indicada
     * \param [in] (string) $event - Nome do evento
     * \param [in] (variant) $handler - Handler do evento
     * \param [in] (int) $priority - Prioridade do handler, maior melhor.
     * \return \FW\Core\Application.
     */
    public function on($event, $handler, $priority = 0)
    {
        $this->resolve('events')->on($event, $handler, $priority);

        return $this;
    }

    /**
     * \brief Remove o registro de um handler de eventos
     * \param [in] (string) $event - Nome do evento
     * \return \FW\Core\Application.
     */
    public function off($event)
    {
        $this->resolve('events')->off($event);

        return $this;
    }

    /**
     * \brief Dispara o evento com o nome indicado, 
     *        com os dados passados por parametro para cada handler
     * \param [in] (type) $event
     * \param [in] (type) $data
     * \return (array).
     */
    public function fire($event, $data = [])
    {
        return $this->resolve('events')->fire($event, $data);
    }

    /**
     * \brief Retorna a instancia compartilhada desta classe.
     *
     * @return \FW\Core\Application
     */
    public static function sharedInstance()
    {
        if (!static::$sharedInstance) {
            static::$sharedInstance = new static();
        }

        return static::$sharedInstance;
    }

    /**
     * \brief Registra as dependências padrões da aplicação.
     */
    protected function bindDefaultDependencies()
    {
        $this->instance('events', new Mediator($this));
    }
}
