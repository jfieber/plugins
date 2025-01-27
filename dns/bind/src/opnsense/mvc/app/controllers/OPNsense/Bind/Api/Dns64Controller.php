<?php

/*
 * Copyright (C) 2025 John Fieber <jrf@ursamaris.org>
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice,
 *    this list of conditions and the following disclaimer.
 *
 * 2. Redistributions in binary form must reproduce the above copyright
 *    notice, this list of conditions and the following disclaimer in the
 *    documentation and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED ``AS IS'' AND ANY EXPRESS OR IMPLIED WARRANTIES,
 * INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY
 * AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY,
 * OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 */

namespace OPNsense\Bind\Api;

use OPNsense\Base\ApiMutableModelControllerBase;

class Dns64Controller extends ApiMutableModelControllerBase
{
    protected static $internalModelName = 'dns64';
    protected static $internalModelClass = '\OPNsense\Bind\Dns64';

    public function searchDns64Action()
    {
        return $this->searchBase('dns64configs.dns64', ['enabled', 'name', 'netprefix', 'clients', 'mapped', 'invertmapped', 'recursiveonly', 'breakdnssec']);
    }

    public function getDns64Action($uuid = null)
    {
        return $this->getBase('dns64', 'dns64configs.dns64', $uuid);
    }

    public function addDns64Action()
    {
        return $this->addBase('dns64', 'dns64configs.dns64');
    }

    public function delDns64Action($uuid)
    {
        return $this->delBase('dns64configs.dns64', $uuid);
    }

    public function setDns64Action($uuid)
    {
        return $this->setBase('dns64', 'dns64configs.dns64', $uuid);
    }

    public function toggleDns64Action($uuid)
    {
        return $this->toggleBase('dns64configs.dns64', $uuid);
    }
}
