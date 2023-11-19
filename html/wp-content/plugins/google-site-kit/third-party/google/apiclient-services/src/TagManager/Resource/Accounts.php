<?php

/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */
namespace Google\Site_Kit_Dependencies\Google\Service\TagManager\Resource;

use Google\Site_Kit_Dependencies\Google\Service\TagManager\Account;
use Google\Site_Kit_Dependencies\Google\Service\TagManager\ListAccountsResponse;
/**
 * The "accounts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $tagmanagerService = new Google\Service\TagManager(...);
 *   $accounts = $tagmanagerService->accounts;
 *  </code>
 */
class Accounts extends \Google\Site_Kit_Dependencies\Google\Service\Resource
{
    /**
     * Gets a GTM Account. (accounts.get)
     *
     * @param string $path GTM Account's API relative path. Example:
     * accounts/{account_id}
     * @param array $optParams Optional parameters.
     * @return Account
     */
    public function get($path, $optParams = [])
    {
        $params = ['path' => $path];
        $params = \array_merge($params, $optParams);
        return $this->call('get', [$params], \Google\Site_Kit_Dependencies\Google\Service\TagManager\Account::class);
    }
    /**
     * Lists all GTM Accounts that a user has access to. (accounts.listAccounts)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool includeGoogleTags Also retrieve accounts associated with
     * Google Tag when true.
     * @opt_param string pageToken Continuation token for fetching the next page of
     * results.
     * @return ListAccountsResponse
     */
    public function listAccounts($optParams = [])
    {
        $params = [];
        $params = \array_merge($params, $optParams);
        return $this->call('list', [$params], \Google\Site_Kit_Dependencies\Google\Service\TagManager\ListAccountsResponse::class);
    }
    /**
     * Updates a GTM Account. (accounts.update)
     *
     * @param string $path GTM Account's API relative path. Example:
     * accounts/{account_id}
     * @param Account $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string fingerprint When provided, this fingerprint must match the
     * fingerprint of the account in storage.
     * @return Account
     */
    public function update($path, \Google\Site_Kit_Dependencies\Google\Service\TagManager\Account $postBody, $optParams = [])
    {
        $params = ['path' => $path, 'postBody' => $postBody];
        $params = \array_merge($params, $optParams);
        return $this->call('update', [$params], \Google\Site_Kit_Dependencies\Google\Service\TagManager\Account::class);
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\Google\Site_Kit_Dependencies\Google\Service\TagManager\Resource\Accounts::class, 'Google\\Site_Kit_Dependencies\\Google_Service_TagManager_Resource_Accounts');
