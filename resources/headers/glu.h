typedef unsigned int GLenum;
typedef unsigned char GLboolean;
typedef unsigned int GLbitfield;
typedef signed char GLbyte;
typedef short GLshort;
typedef int GLint;
typedef int GLsizei;
typedef unsigned char GLubyte;
typedef unsigned short GLushort;
typedef unsigned int GLuint;
typedef float GLfloat;
typedef float GLclampf;
typedef double GLdouble;
typedef double GLclampd;
typedef void GLvoid;

typedef struct GLUnurbs GLUnurbs;
typedef struct GLUquadric GLUquadric;
typedef struct GLUtesselator GLUtesselator;
typedef struct GLUnurbs GLUnurbsObj;
typedef struct GLUquadric GLUquadricObj;
typedef struct GLUtesselator GLUtesselatorObj;
typedef struct GLUtesselator GLUtriangulatorObj;

extern const GLubyte *gluErrorString(GLenum errCode);
extern const unsigned short *gluErrorUnicodeStringEXT(GLenum errCode);
extern const GLubyte *gluGetString(GLenum name);
extern void gluOrtho2D(GLdouble left, GLdouble right, GLdouble bottom, GLdouble top);
extern void gluPerspective(GLdouble fovy, GLdouble aspect, GLdouble zNear, GLdouble zFar);
extern void gluPickMatrix(GLdouble x, GLdouble y, GLdouble width, GLdouble height, GLint viewport[4]);
extern void gluLookAt(GLdouble eyex, GLdouble eyey, GLdouble eyez, GLdouble centerx, GLdouble centery, GLdouble centerz, GLdouble upx, GLdouble upy, GLdouble upz);
extern int gluProject(GLdouble objx, GLdouble objy, GLdouble objz, const GLdouble modelMatrix[16], const GLdouble projMatrix[16], const GLint viewport[4], GLdouble *winx, GLdouble *winy, GLdouble *winz);
extern int gluUnProject(GLdouble winx, GLdouble winy, GLdouble winz, const GLdouble modelMatrix[16], const GLdouble projMatrix[16], const GLint viewport[4], GLdouble *objx, GLdouble *objy, GLdouble *objz);
extern int gluScaleImage(GLenum format, GLint widthin, GLint heightin, GLenum typein, const void *datain, GLint widthout, GLint heightout, GLenum typeout, void *dataout);
extern int gluBuild1DMipmaps(GLenum target, GLint components, GLint width, GLenum format, GLenum type, const void *data);
extern int gluBuild2DMipmaps(GLenum target, GLint components, GLint width, GLint height, GLenum format, GLenum type, const void *data);
extern GLUquadric *gluNewQuadric(void);
extern void gluDeleteQuadric(GLUquadric *state);
extern void gluQuadricNormals(GLUquadric *quadObject, GLenum normals);
extern void gluQuadricTexture(GLUquadric *quadObject, GLboolean textureCoords);
extern void gluQuadricOrientation(GLUquadric *quadObject, GLenum orientation);
extern void gluQuadricDrawStyle(GLUquadric *quadObject, GLenum drawStyle);
extern void gluCylinder(GLUquadric *qobj, GLdouble baseRadius, GLdouble topRadius, GLdouble height, GLint slices, GLint stacks);
extern void gluDisk(GLUquadric *qobj, GLdouble innerRadius, GLdouble outerRadius, GLint slices, GLint loops);
extern void gluPartialDisk(GLUquadric *qobj, GLdouble innerRadius, GLdouble outerRadius, GLint slices, GLint loops, GLdouble startAngle, GLdouble sweepAngle);
extern void gluSphere(GLUquadric *qobj, GLdouble radius, GLint slices, GLint stacks);
extern void gluQuadricCallback(GLUquadric *qobj, GLenum which, void (*fn)());
extern GLUtesselator *gluNewTess(void);
extern void gluDeleteTess(GLUtesselator *tess);
extern void gluTessBeginPolygon(GLUtesselator *tess, void *polygon_data);
extern void gluTessBeginContour(GLUtesselator *tess);
extern void gluTessVertex(GLUtesselator *tess, GLdouble coords[3], void *data);
extern void gluTessEndContour(GLUtesselator *tess);
extern void gluTessEndPolygon(GLUtesselator *tess);
extern void gluTessProperty(GLUtesselator *tess, GLenum which, GLdouble value);
extern void gluTessNormal(GLUtesselator *tess, GLdouble x, GLdouble y, GLdouble z);
extern void gluTessCallback(GLUtesselator *tess, GLenum which, void (*fn)());
extern void gluGetTessProperty(GLUtesselator *tess, GLenum which, GLdouble *value);
extern GLUnurbs *gluNewNurbsRenderer(void);
extern void gluDeleteNurbsRenderer(GLUnurbs *nobj);
extern void gluBeginSurface(GLUnurbs *nobj);
extern void gluBeginCurve(GLUnurbs *nobj);
extern void gluEndCurve(GLUnurbs *nobj);
extern void gluEndSurface(GLUnurbs *nobj);
extern void gluBeginTrim(GLUnurbs *nobj);
extern void gluEndTrim(GLUnurbs *nobj);
extern void gluPwlCurve(GLUnurbs *nobj, GLint count, GLfloat *array, GLint stride, GLenum type);
extern void gluNurbsCurve(GLUnurbs *nobj, GLint nknots, GLfloat *knot, GLint stride, GLfloat *ctlarray, GLint order, GLenum type);
extern void gluNurbsSurface(GLUnurbs *nobj, GLint sknot_count, float *sknot, GLint tknot_count, GLfloat *tknot, GLint s_stride, GLint t_stride, GLfloat *ctlarray, GLint sorder, GLint torder, GLenum type);
extern void gluLoadSamplingMatrices(GLUnurbs *nobj, const GLfloat modelMatrix[16], const GLfloat projMatrix[16], const GLint viewport[4]);
extern void gluNurbsProperty(GLUnurbs *nobj, GLenum property, GLfloat value);
extern void gluGetNurbsProperty(GLUnurbs *nobj, GLenum property, GLfloat *value);
extern void gluNurbsCallback(GLUnurbs *nobj, GLenum which, void (*fn)());
extern void gluBeginPolygon(GLUtesselator *tess);
extern void gluNextContour(GLUtesselator *tess, GLenum type);
extern void gluEndPolygon(GLUtesselator *tess);
