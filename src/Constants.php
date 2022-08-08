<?php
namespace Lysice\SimpleSSO;

class Constants {
    /**
     * no broker id specified
     */
    const CODE_NO_BROKER_ID_SPECIFIED = 1001;

    /**
     * no token specified
     */
    const CODE_NO_TOKEN_SPECIFIED = 1002;

    /**
     * checksum failed
     */
    const CODE_CHECKSUM_FAILED = 1003;

    /**
     * no username and/or password provided
     */
    const CODE_NO_USERNAME_OR_PASSWORD_PROVIDED = 1004;

    /**
     * User authentication failed
     */
    const CODE_AUTH_FAILED = 1005;

    /**
     * User not login
     */
    const CODE_USER_NOT_LOGIN = 1006;

    /**
     * User not found
     */
    const CODE_USER_NOT_FOUND = 1007;

    /**
     * Missing session key from broker
     */
    const CODE_SESSION_KEY_MISSED = 1008;

    /**
     * There is no saved session data associated with the broker session id
     */
    const CODE_SESSION_DATA_MISSED = 1009;

    /**
     * Invalid session id
     */
    const CODE_SESSION_ID_INVALID = 1010;

    /**
     * Checksum failed: Client IP address may have changed
     */
    const CODE_IP_CHANGED = 1011;

    /**
     * Provided broker does not exist
     */
    const CODE_BROKER_NOT_EXIST = 1012;

    /**
     * Provided Password does't match
     */
    const CODE_PASSWORD_ERROR = 1013;
}
