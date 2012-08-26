<?php

namespace Gitonomy\Bundle\CoreBundle\EventDispatcher\Event;

use Gitonomy\Git\ReceiveReference;

use Symfony\Component\EventDispatcher\Event;

use Gitonomy\Bundle\CoreBundle\Entity\Project;
use Gitonomy\Bundle\CoreBundle\Entity\User;

class ReceiveReferenceEvent extends Event
{
    protected $project;
    protected $user;
    protected $reference;
    protected $before;
    protected $after;

    public function __construct(Project $project, User $user, $reference, $before = null, $after = null)
    {
        $this
            ->setProject($project)
            ->setUser($user)
            ->setReference($reference)
            ->setBefore($before)
            ->setAfter($after)
        ;
    }

    public function getProject()
    {
        return $this->project;
    }

    public function setProject($project)
    {
        $this->project = $project;

        return $this;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    public function getReference()
    {
        return $this->reference;
    }

    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    public function getBefore()
    {
        return $this->before;
    }

    public function setBefore($before)
    {
        $this->before = $before;

        return $this;
    }

    public function getAfter()
    {
        return $this->after;
    }

    public function setAfter($after)
    {
        $this->after = $after;

        return $this;
    }
}
