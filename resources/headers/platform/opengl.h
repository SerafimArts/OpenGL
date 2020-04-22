
#ifndef APIENTRY
    #define APIENTRY
#endif

#ifndef APIENTRYP
    #define APIENTRYP APIENTRY *
#endif

#ifndef GLAPI
    #define GLAPI extern
#endif

// OpenGL >= 1.0
typedef void GLvoid;
typedef unsigned int GLenum;
typedef khronos_float_t GLfloat;
typedef int GLint;
typedef int GLsizei;
typedef unsigned int GLbitfield;
typedef double GLdouble;
typedef unsigned int GLuint;
typedef unsigned char GLboolean;
typedef khronos_uint8_t GLubyte;

// OpenGL >= 1.1
typedef khronos_float_t GLclampf;
typedef double GLclampd;

// OpenGL >= 1.5
typedef khronos_ssize_t GLsizeiptr;
typedef khronos_intptr_t GLintptr;

// OpenGL >= 2.0
typedef char GLchar;
typedef khronos_int16_t GLshort;
typedef khronos_int8_t GLbyte;
typedef khronos_uint16_t GLushort;

// OpenGL >= 3.0
typedef khronos_uint16_t GLhalf;

// OpenGL >= 3.2
typedef struct __GLsync *GLsync;
typedef khronos_uint64_t GLuint64;
typedef khronos_int64_t GLint64;
