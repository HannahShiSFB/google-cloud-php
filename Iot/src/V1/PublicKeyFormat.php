<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iot/v1/resources.proto

namespace Google\Cloud\Iot\V1;

/**
 * The supported formats for the public key.
 *
 * Protobuf type <code>google.cloud.iot.v1.PublicKeyFormat</code>
 */
class PublicKeyFormat
{
    /**
     * The format has not been specified. This is an invalid default value and
     * must not be used.
     *
     * Generated from protobuf enum <code>UNSPECIFIED_PUBLIC_KEY_FORMAT = 0;</code>
     */
    const UNSPECIFIED_PUBLIC_KEY_FORMAT = 0;
    /**
     * An RSA public key encoded in base64, and wrapped by
     * `-----BEGIN PUBLIC KEY-----` and `-----END PUBLIC KEY-----`. This can be
     * used to verify `RS256` signatures in JWT tokens ([RFC7518](
     * https://www.ietf.org/rfc/rfc7518.txt)).
     *
     * Generated from protobuf enum <code>RSA_PEM = 3;</code>
     */
    const RSA_PEM = 3;
    /**
     * As RSA_PEM, but wrapped in an X.509v3 certificate ([RFC5280](
     * https://www.ietf.org/rfc/rfc5280.txt)), encoded in base64, and wrapped by
     * `-----BEGIN CERTIFICATE-----` and `-----END CERTIFICATE-----`.
     *
     * Generated from protobuf enum <code>RSA_X509_PEM = 1;</code>
     */
    const RSA_X509_PEM = 1;
    /**
     * Public key for the ECDSA algorithm using P-256 and SHA-256, encoded in
     * base64, and wrapped by `-----BEGIN PUBLIC KEY-----` and `-----END
     * PUBLIC KEY-----`. This can be used to verify JWT tokens with the `ES256`
     * algorithm ([RFC7518](https://www.ietf.org/rfc/rfc7518.txt)). This curve is
     * defined in [OpenSSL](https://www.openssl.org/) as the `prime256v1` curve.
     *
     * Generated from protobuf enum <code>ES256_PEM = 2;</code>
     */
    const ES256_PEM = 2;
    /**
     * As ES256_PEM, but wrapped in an X.509v3 certificate ([RFC5280](
     * https://www.ietf.org/rfc/rfc5280.txt)), encoded in base64, and wrapped by
     * `-----BEGIN CERTIFICATE-----` and `-----END CERTIFICATE-----`.
     *
     * Generated from protobuf enum <code>ES256_X509_PEM = 4;</code>
     */
    const ES256_X509_PEM = 4;
}
