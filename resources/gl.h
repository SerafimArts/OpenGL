
#ifdef __windows__
  #include "wglext.h"
#endif

#ifdef __linux__
    extern void *glXGetProcAddress(const char* fn);
#endif

// OpenGL >= 1.0
typedef void GLvoid;
typedef unsigned int GLenum;

typedef float GLfloat;
typedef int GLint;
typedef int GLsizei;
typedef unsigned int GLbitfield;
typedef double GLdouble;
typedef unsigned int GLuint;
typedef unsigned char GLboolean;
typedef unsigned char GLubyte;

extern void glCullFace(GLenum mode);
extern void glFrontFace(GLenum mode);
extern void glHint(GLenum target, GLenum mode);
extern void glLineWidth(GLfloat width);
extern void glPointSize(GLfloat size);
extern void glPolygonMode(GLenum face, GLenum mode);
extern void glScissor(GLint x, GLint y, GLsizei width, GLsizei height);
extern void glTexParameterf(GLenum target, GLenum pname, GLfloat param);
extern void glTexParameterfv(GLenum target, GLenum pname, const GLfloat *params);
extern void glTexParameteri(GLenum target, GLenum pname, GLint param);
extern void glTexParameteriv(GLenum target, GLenum pname, const GLint *params);
extern void glTexImage1D(GLenum target, GLint level, GLint internalformat, GLsizei width, GLint border, GLenum format, GLenum type, const void *pixels);
extern void glTexImage2D(GLenum target, GLint level, GLint internalformat, GLsizei width, GLsizei height, GLint border, GLenum format, GLenum type, const void *pixels);
extern void glDrawBuffer(GLenum buf);
extern void glClear(GLbitfield mask);
extern void glClearColor(GLfloat red, GLfloat green, GLfloat blue, GLfloat alpha);
extern void glClearStencil(GLint s);
extern void glClearDepth(GLdouble depth);
extern void glStencilMask(GLuint mask);
extern void glColorMask(GLboolean red, GLboolean green, GLboolean blue, GLboolean alpha);
extern void glDepthMask(GLboolean flag);
extern void glDisable(GLenum cap);
extern void glEnable(GLenum cap);
extern void glFinish(void);
extern void glFlush(void);
extern void glBlendFunc(GLenum sfactor, GLenum dfactor);
extern void glLogicOp(GLenum opcode);
extern void glStencilFunc(GLenum func, GLint ref, GLuint mask);
extern void glStencilOp(GLenum fail, GLenum zfail, GLenum zpass);
extern void glDepthFunc(GLenum func);
extern void glPixelStoref(GLenum pname, GLfloat param);
extern void glPixelStorei(GLenum pname, GLint param);
extern void glReadBuffer(GLenum src);
extern void glReadPixels(GLint x, GLint y, GLsizei width, GLsizei height, GLenum format, GLenum type, void *pixels);
extern void glGetBooleanv(GLenum pname, GLboolean *data);
extern void glGetDoublev(GLenum pname, GLdouble *data);
extern GLenum glGetError(void);
extern void glGetFloatv(GLenum pname, GLfloat *data);
extern void glGetIntegerv(GLenum pname, GLint *data);
extern const GLubyte *glGetString(GLenum name);
extern void glGetTexImage(GLenum target, GLint level, GLenum format, GLenum type, void *pixels);
extern void glGetTexParameterfv(GLenum target, GLenum pname, GLfloat *params);
extern void glGetTexParameteriv(GLenum target, GLenum pname, GLint *params);
extern void glGetTexLevelParameterfv(GLenum target, GLint level, GLenum pname, GLfloat *params);
extern void glGetTexLevelParameteriv(GLenum target, GLint level, GLenum pname, GLint *params);
extern GLboolean glIsEnabled(GLenum cap);
extern void glDepthRange(GLdouble n, GLdouble f);
extern void glViewport(GLint x, GLint y, GLsizei width, GLsizei height);

// OpenGL >= 1.1
typedef float GLclampf;
typedef double GLclampd;

extern void glDrawArrays(GLenum mode, GLint first, GLsizei count);
extern void glDrawElements(GLenum mode, GLsizei count, GLenum type, const void *indices);
extern void glGetPointerv(GLenum pname, void **params);
extern void glPolygonOffset(GLfloat factor, GLfloat units);
extern void glCopyTexImage1D(GLenum target, GLint level, GLenum internalformat, GLint x, GLint y, GLsizei width, GLint border);
extern void glCopyTexImage2D(GLenum target, GLint level, GLenum internalformat, GLint x, GLint y, GLsizei width, GLsizei height, GLint border);
extern void glCopyTexSubImage1D(GLenum target, GLint level, GLint xoffset, GLint x, GLint y, GLsizei width);
extern void glCopyTexSubImage2D(GLenum target, GLint level, GLint xoffset, GLint yoffset, GLint x, GLint y, GLsizei width, GLsizei height);
extern void glTexSubImage1D(GLenum target, GLint level, GLint xoffset, GLsizei width, GLenum format, GLenum type, const void *pixels);
extern void glTexSubImage2D(GLenum target, GLint level, GLint xoffset, GLint yoffset, GLsizei width, GLsizei height, GLenum format, GLenum type, const void *pixels);
extern void glBindTexture(GLenum target, GLuint texture);
extern void glDeleteTextures(GLsizei n, const GLuint *textures);
extern void glGenTextures(GLsizei n, GLuint *textures);
extern GLboolean glIsTexture(GLuint texture);

// OpenGL >= 1.5
typedef ptrdiff_t GLsizeiptr;
typedef ptrdiff_t GLintptr;

// OpenGL >= 2.0
typedef char GLchar;
typedef short GLshort;
typedef signed char GLbyte;
typedef unsigned short GLushort;

// OpenGL >= 3.0
typedef unsigned short GLhalf;

// OpenGL >= 3.2
typedef struct __GLsync *GLsync;
typedef uint64_t GLuint64;
typedef int64_t GLint64;

// OpenGL >= 4.3
typedef void(*GLDEBUGPROC)(GLenum source, GLenum type, GLuint id, GLenum severity, GLsizei length, const GLchar *message, const void *userParam);
