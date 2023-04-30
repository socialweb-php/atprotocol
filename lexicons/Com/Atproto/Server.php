<?php

/**
 * This file is part of socialweb/atproto
 *
 * socialweb/atproto is free software: you can redistribute it
 * and/or modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either version
 * 3 of the License, or (at your option) any later version.
 *
 * socialweb/atproto is distributed in the hope that it will be
 * useful, but WITHOUT ANY WARRANTY; without even the implied warranty
 * of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with socialweb/atproto.
 * If not, see <https://www.gnu.org/licenses/>.
 *
 * @copyright Copyright (c) Ben Ramsey <ben@benramsey.com>
 * @license https://opensource.org/license/lgpl-3-0/ GNU Lesser General Public License version 3 or later
 */

declare(strict_types=1);

namespace Com\Atproto;

use SocialWeb\Atproto\Lexicon\Lexicon;
use SocialWeb\Atproto\Lexicon\Type;

/**
 * This interface should be auto-generated from the sources in
 * `resources/bluesky-social/atproto/lexicons`.
 */
interface Server
{
    /**
     * Create an authentication session.
     *
     * @param string $identifier Handle or other identifier supported by the server for the authenticating user.
     *
     * @return object{accessJwt: string, refreshJwt: string, handle: string, did: string, email?: string}
     */
    #[Lexicon(
        lexicon: 1,
        id: 'com.atproto.server.createSession',
        type: Type::Procedure,
        description: 'Create an authentication session.',
    )]
    public function createSession(string $identifier, string $password): object;

    /**
     * Get information about the current session.
     *
     * @return object{handle: string, did: string, email?: string}
     */
    #[Lexicon(
        lexicon: 1,
        id: 'com.atproto.server.getSession',
        type: Type::Query,
        description: 'Get information about the current session.',
    )]
    public function getSession(): object;
}